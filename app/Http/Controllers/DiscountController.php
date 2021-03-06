<?php

namespace App\Http\Controllers;

use App\Discount;
use App\DiscountRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class DiscountController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $datos = [
            "number" => $req["number"],
            "type" => $req["type"],
            "amount" => $req["amount"],
            "active" => 1
        ];

        $discount = new Discount($datos);
        $discount->save();
        return redirect('/backend/discount');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        Discount::destroy($req->id);
        return redirect('/backend/discount');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function onoff($discountId, $active)
    {
        $discount = Discount::find($discountId);
        if ($active == 'on') {
            $active = '1';
            $res = ["changedTo" => 1];
        } else {
            $active = '0';
            $res = ["changedTo" => 0];
        }

        $discount->update(['active'=>$active]);
        
        return json_encode($res);
    }

    public function check(Request $req)
    {
        /* $discounts = DB::table('discounts')->where(['number'=> $req->discount, 'active'=>'1'])->get(); */
        $discount = Discount::where('number', $req->discount)->where('active', '1')->limit(1)->get();

        
        if($discount->isEmpty()){
            return json_encode(["discount" => false]);
        }else{
            $register = DiscountRegister::where('discount_id', $discount[0]->id)->where('user_id', Auth::user()->id)->get();
            if ($register->isEmpty()){
                return json_encode(["discount" => false]);
            }else{
                $res = ["discount" => true, "type"=>$discount[0]->type, "quantity"=>$discount[0]->amount, "discount_id"=>$discount[0]->id];
                return json_encode($res);
            }
        }
    }

    public function check2($discount)
    {
        $discount = Discount::where('number', $discount)->where('active', '1')->limit(1)->get();
        /* dd($discount); */
        if($discount->isEmpty()){
            return json_encode(["discount" => false]);
        }else{
            $res = ["discount" => true, "type"=>$discount[0]->type, "quantity"=>$discount[0]->amount];
            return json_encode($res);
        }
    }
}
