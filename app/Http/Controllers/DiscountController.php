<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
            "active" => $req["active"]
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
}
