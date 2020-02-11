<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shoe;
use App\Stock;
use App\Shopcar;
use App\Address;
use App\Custom\Oca;
use App\OrdersOutOfStock;

class ShopcarController extends Controller
{
    public function add($stock_id)
    {
        $user = Auth::user();
        $stock = Stock::find($stock_id);

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        if (is_null($shopcar)) {
            //debe crearlo
            $shopcar = $user->shopcar()->create([
                'user_id' => $user->id
            ]);
        }

        //continua proceso
        $shopcar->stock()->attach($stock_id);

        return redirect('/backend/shopcar/list/');
    }

    public function list()
    {
        $user = Auth::user();

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        if (is_null($shopcar) || $shopcar->stock->isEmpty()) {
        //dd($shopcar->stock);
            return view('backend.backendVerCarrito', ['vacio' => 'ok']);
        }
        //dd($shopcar);
        $stocks = $shopcar->stock;

        $addresses = Address::where('user_id', '=', $user->id)->get();

        /*   INTEGRACION OCA   */
        ### Unicamente para tarifar un envío requiere un número de operativa y CUIT válidos,
        ### autorizados por OCA para operar (at. al cliente 0800-999-7700). 
        ### Otros métodos no requieren esta autorización

        /* $oca = new Oca($cuit = '27-31879156-1', $operativa = 298450);
        //dd($oca);
        $price = $oca->tarifarEnvioCorporativo(1, 1, 1128, 1900, 1, 0);
        dd($price); 
        //$envios = $oca->listEnvios($fechaDesde = '08-08-2015', $fechaHasta = '13-08-2015');

        print_r($envios);
        print_r($price); */

        /* FIN INTEGRACION OCA */

        return view('backend.backendVerCarrito', compact('shopcar', 'stocks', 'addresses'));
    }

    public function removeStock($shopcar_id, $stock_id)
    {
        $shopcar = Shopcar::find($shopcar_id);
        $stock = Stock::find($stock_id);

        $shopcar->stock()->toggle($stock);

        //dd($shopcar->stock($stock_id));
        /* ->detach() */
        return back();
    }

    public function add2(Request $req)
    {
        if (Auth::user()) {
            $user = Auth::user();

            $stock = Shoe::find($req->shoeId)->stock()->where('size', '=',$req->size)->first();

            if (is_null($stock)) {
                /** Graba en OrdersOutOfStock el pedido rechazado */
                $ordersOutOfStock = new OrdersOutOfStock;

                $ordersOutOfStock->create([
                    'user_id' => $user->id,
                    'shoe_id' => $req->shoeId,
                    'size'=>$req->size
                ]);

                $state = ['state' => false];
                return json_encode($state);
            }

            $shopcar = Shopcar::where('ordered', '=', '0')
                ->where('user_id', '=', $user->id)
                ->take(1)
                ->first();

            if (is_null($shopcar)) {
                //debe crearlo
                $shopcar = $user->shopcar()->create([
                    'user_id' => $user->id
                ]);
            }

            //continua proceso
            $shopcar->stock()->attach($stock->id);
            $state = ['state' => true];
            return json_encode($state);
        }else{
            $state = ['state' => 'notLogged'];
            return json_encode($state);
        }
    }

    public function add3($shoeId, $size)
    {
        $user = Auth::user();
        /** Graba en OrdersOutOfStock el pedido rechazado */
        $ordersOutOfStock = new OrdersOutOfStock;

        $ordersOutOfStock->create([
            'user_id' => $user->id,
            'shoe_id' => $shoeId,
            'size'=>$size
        ]);

        $printi = Shoe::find($shoeId)->stock()->where('size', '=', $size)->first();
        return json_encode($printi);
    }

    public function forcheckout (Request $req)
    {
        
        
        
        $user = Auth::user();
        
        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        
        $stocks = $shopcar->stock;
        $total = 0;
        foreach ($stocks as $product) {
            $total += $product->shoe->price;

        }
        //FALTA RESTAR CUPON
        //FALTA COSTO DE ENVIO

        $addresses = Address::find($req->address_id);

        return view('shopCheckout', compact('shopcar', 'stocks', 'addresses', 'total'));
    }

}
