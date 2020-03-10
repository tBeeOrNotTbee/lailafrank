<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\DiscountRegister;
use App\Discount;
use App\Mail\FeedbackResponse;
use App\Mail\SendingDiscount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function store(Request $req)
    {
        //Guardar modelo
        $feedback = new Feedback([
            'user_id'=>$req->user_id,
            'fullName'=>$req->fullName,
            'mail'=>$req->mail,
            'cellphone'=>$req->cellphone,
            'model'=>$req->model,
            'suggestion'=>$req->suggestion
        ]);

        $feedback->save();

        $discount = Discount::find($req->discount_id);
        
        //Habilitar cupon
        $enablingDiscount = new DiscountRegister([
            'user_id'=>$req->user_id,
            'discount_id'=>$req->discount_id,
            'state'=>'true'
        ]);

        $enablingDiscount->save();

        //Enviar MAIL con el descuento
        Mail::to($req->mail)->queue(new SendingDiscount($feedback, $discount->number));

        //Mail a Laila Frank
        Mail::to('shoes@lailafrank.com')->queue(new FeedbackResponse($feedback));


        //retornar vista
        return view('feedbackBack');
    }
}
