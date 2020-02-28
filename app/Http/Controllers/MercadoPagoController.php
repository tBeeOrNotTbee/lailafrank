<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_order;
use App\Shopcar;
use App\Address;
use Illuminate\Support\Facades\Auth;

class MercadoPagoController extends Controller
{
    public function success(Request $req){
        $last_payment_order = Payment_Order::find($req->external_reference);
        $payment = Payment_Order::where('user_id', Auth::user()->id);
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
        $payment = Payment_Order::where('user_id', Auth::user()->id);
        $shopcar = Shopcar::find($last_payment_order->shopcar_id);
        $address = Address::find($last_payment_order->address_id);
        $pending = true;

        $shopcar->update(['ordered' => 1]);

        $payment->update(['state' => 'pending']);
        
        return view('shopCompras', compact('payment', 'pending'));
    }
}
