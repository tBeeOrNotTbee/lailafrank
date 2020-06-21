<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function newBackendAddress(){
        return view ('backendNuevaAddress');
    }

    public function newAddress(Request $req, $from)
    {
        $this->validate($req,
            ['name'=>'string|required',
            'surname'=>'string|required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'post_code'=>'required',
            'cellphone'=>'string|required'
        ]);

        Address::create([
            "user_id"=>$req->user_id,
            "name"=>$req->name,
            "surname"=>$req->surname,
            "street"=>$req->street,
            "number"=>$req->number,
            "floor"=>$req->floor,
            "apartment"=>$req->apartment,
            "city"=>$req->city,
            "state"=>$req->state,
            "post_code"=>$req->post_code,
            "country"=>$req->country,
            "country_id"=>$req->country_id,
            "cellphone"=>$req->cellphone
        ]);

        if ($from === 'backend') {
            return redirect('/backend/shopcar/list/');
        } else if ($from === 'frontend'){
            /*TODO*/
            return redirect('/shop/myaccount/addresses');
        }
    }

}
