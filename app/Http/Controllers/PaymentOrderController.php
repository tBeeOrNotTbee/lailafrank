<?php

namespace App\Http\Controllers;

use App\Mail\SendingTrackingId;
use App\Payment_Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaymentOrderController extends Controller
{
    public function update(Request $req)
    {
        $payment = Payment_Order::find($req->payment_id);

        $user = User::find($$payment->user_id);

        $data = [
            'shipping_method' => $req->shipping_method,
            'tracking_id' => $req->tracking_id,
            'state' => $req->state,
        ];

        $payment->update($data);

        if ($payment->sent_tracking <> '1' || !is_null($payment->sent_tracking)) {
            if ($payment->tracking_id <> '' || !is_null($payment->tracking_id)) {
                $data = [
                    "fullName"=>$user->fullName(),
                    "correo"=>$req->shipping_method,
                    "tracking_id"=>$req->tracking_id,
                    "paymentId"=>$payment->id
                ];

                Mail::to($user->email)->queue(new SendingTrackingId($data));

                $payment->update(['sent_tracking'=>1]);
            }
        }

        $url = '/backend/pedido/'.$req->payment_id;
        return redirect($url);
    }
}
