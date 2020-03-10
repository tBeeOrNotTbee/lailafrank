<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_order;
use App\Shopcar;
use App\Address;
use App\Mail\SendingOrderToClient;
use Illuminate\Support\Facades\Auth;
use App\PaymentMethods\MercadoPago;
use Illuminate\Support\Facades\Mail;
use MercadoPago\Item;
use MercadoPago\MerchantOrder;
use MercadoPago\Payer;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\SDK;

class MercadoPagoController extends Controller
{
    public static function mpfail($shopcar){

        foreach ($shopcar->stock as $stock) {
            $stock->quantity ++;
            $stock->save();
        }

        $shopcar->update(['ordered' => 0]);
        return true;
    }

    public function success(Request $req){
        SDK::setAccessToken("ENV_ACCESS_TOKEN");
        $last_payment_order = Payment_Order::find($req->external_reference);
        $payment = Payment_Order::where('user_id', Auth::user()->id)->get();
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);
        $address = Address::find($last_payment_order->address_id);
        $success = true;

        $shopcar->update(['ordered' => 1]);

        $payment->update(['state' => 'acreditado']);

        // DEVOLVER VISTA CON PAYMENT ORDERS DEL USUARIO
        $shopcar->ordered = 1;

        //enviar mail a cliente
        Mail::to(Auth::user()->email)->queue(new SendingOrderToClient);

        //enviar mail a lailashoes


        return view('shopCompras', compact('payment', 'success'));
    }

    public function fail(Request $req){
        SDK::setAccessToken("ENV_ACCESS_TOKEN");
        $last_payment_order = Payment_Order::find($req->external_reference);
        $payment = Payment_Order::where('user_id', Auth::user()->id)->get();
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);

        $this->mpfail($shopcar);

        //TO DO - HACER ALGO CON STOCK
        return redirect('/shop/shopcar?mpFail=ok');
    }

    public function pending(Request $req){
        SDK::setAccessToken("ENV_ACCESS_TOKEN");
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

    public function IPNhandler(){
        /* SDK::setAccessToken("ENV_ACCESS_TOKEN"); */
        /* $last_payment_order = Payment_Order::find($req->external_reference);
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
            $last_payment_order->state = "acreditado";
            return true;
        }else if($payment->status == "rejected" || $payment->status == "cancelled"){
            $this->mpfail($shopcar);
            return true;
        } */

        return true;
    }

}
