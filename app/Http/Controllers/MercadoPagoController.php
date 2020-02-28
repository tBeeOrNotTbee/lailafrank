<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_order;
use App\Shopcar;
use App\Address;
use Illuminate\Support\Facades\Auth;
use App\PaymentMethods\MercadoPago;
use MercadoPago\Item;
use MercadoPago\MerchantOrder;
use MercadoPago\Payer;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;

SDK::setAccessToken("ENV_ACCESS_TOKEN");

class MercadoPagoController extends Controller
{
    public function success(Request $req){
        $last_payment_order = Payment_Order::find($req->external_reference);
        $payment = Payment_Order::where('user_id', Auth::user()->id)->get();
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);
        $address = Address::find($last_payment_order->address_id);
        $success = true;

        $shopcar->update(['ordered' => 1]);

        $payment->update(['state' => 'acreditado']);

        // Descontar STOCK 
        // BUSCAR PAYMENT ORDER Y ASIGNARLE ESTADO DE ACREDITADO
        // DEVOLVER VISTA CON PAYMENT ORDERS DEL USUARIO
        // shopcart -> ordered = 1 (esta ordenado)
        return view('shopCompras', compact('payment', 'success'));
    }

    public function fail(Request $req){
        //TO DO - HACER ALGO CON STOCK
        return view('backend.fail');
    }

    public function pending(Request $req){
        $last_payment_order = Payment_Order::find($req->external_reference);
        $payment_order = Payment_Order::where('user_id', Auth::user()->id)->get();
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);
        $address = Address::find($last_payment_order->address_id);
        $pending = true;
        $merchant_order = null;

        $shopcar->update(['ordered' => 1]);

        $last_payment_order->update(['state' => 'pending']);
        
        return view('shopCompras', compact('payment', 'pending'));
    }

     public static function mpfail($shopcar){
        $shopcar->stock->quantity ++;
        $shopcar->save();
        $shopcar->update(['ordered' => 0]);
        return true;
    }

    public function IPNhandler(Request $req){
        $last_payment_order = Payment_Order::find($req->external_reference);
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);
        switch ($_GET["topic"]) {
            case "payment":
                $payment = Payment::find_by_id($req->id);
                // Get the payment and the corresponding merchant_order reported by the IPN.
                $merchant_order = MerchantOrder::find_by_id($payment->order->id);
                break;
            case "merchant_order":
                $merchant_order = MerchantOrder::find_by_id($_GET["id"]);
                break;
        }
        if($payment->status == "approved"){
            $last_payment_order->state = $payment->status;
            return true;
        }else if($payment->status == "rejected" || $payment->status == "cancelled"){
            $this->mpfail($shopcar);
            return true;
        }

    }

}
