<?php

namespace App\Http\Controllers;

use App\Feedback;
use APP\DiscountRegister;
use APP\Discount;
use Illuminate\Http\Request;

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

        //Habilitar cupon
        $enablingDiscount = new DiscountRegister([
            'user_id'=>$req->user_id,
            'discount_id'=>$req->discount_id,
            'state'=>'true'
        ]);

        $enablingDiscount->save();

        //Enviar MAIL con el descuento
        $discount = Discount::find($req->discount_id);
        $discount->number;

        //retornar vista
        return view('feedbackBack');
    }
}
