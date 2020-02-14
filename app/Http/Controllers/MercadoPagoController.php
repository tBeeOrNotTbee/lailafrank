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
        

        $payment_order = Payment_Order::find($req->external_reference);
        $payment_orders = Payment_Order::where('user_id', Auth::user()->id);
        $shopcar = $payment_order->shopcar_id;
        $address = $payment_order->address_id;
        
        //Descontar STOCK 
        // BUSCAR PAYMENT ORDER Y ASIGNARLE ESTADO DE ACREDITADO
        // DEVOLVER VISTA CON PAYMENT ORDERS DEL USUARIO
        // shopcart -> ordered = 1 (esta ordenado)
        return view('shopCompras', compact('payment_orders', 'shopcar', 'address'));
    }
    public function fail(Request $req){

    }
}
