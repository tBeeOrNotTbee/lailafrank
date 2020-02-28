<?php

namespace App\Http\Controllers;

use App\Payment_Order;
use Illuminate\Http\Request;

class PaymentOrderController extends Controller
{
    public function update(Request $req)
    {
        $payment = Payment_Order::find($req->payment_id);

        $data = [
            'shipping_method' => $req->shipping_method,
            'tracking_id' => $req->tracking_id,
            'state' => $req->state,
        ];

        $payment->update($data);

        $url = '/backend/pedido/'.$req->payment_id;
        return redirect($url);
    }
}
