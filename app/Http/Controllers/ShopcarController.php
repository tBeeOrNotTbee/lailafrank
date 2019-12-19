<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Stock;
use App\Shopcar;
use App\Address;

class ShopcarController extends Controller
{
    public function add ($stock_id){
        $user = Auth::user();
        $stock = Stock::find($stock_id);

        $shopcar = Shopcar::where('ordered','=','0')
                            ->where('user_id','=', $user->id)
                            ->take(1)
                            ->first();

        if (is_null($shopcar)){
            //debe crearlo
            $shopcar = $user->shopcar()->create([
                'user_id'=>$user->id
                ]);
        }

        //continua proceso
        $shopcar->stock()->attach($stock_id);

        return redirect('/backend/shopcar/list/');
    }

    public function list()
    {
        $user = Auth::user();

        $shopcar = Shopcar::where('ordered','=','0')
                            ->where('user_id','=', $user->id)
                            ->take(1)
                            ->first();

        if(is_null($shopcar) || $shopcar->stock->isEmpty()){
            //dd($shopcar->stock);
            return view ('backendVerCarrito', ['vacio'=>'ok']);
        }
        //dd($shopcar);
        $stocks = $shopcar->stock;

        $addresses = Address::where('user_id', '=', $user->id)->get();

        return view ('backendVerCarrito', compact('shopcar','stocks', 'addresses'));
    }

    public function removeStock($shopcar_id, $stock_id)
    {
        $shopcar = Shopcar::find($shopcar_id);

        $shopcar->stock()->wherePivot('id', '=', $stock_id)->detach();

        return back();
    }
}
