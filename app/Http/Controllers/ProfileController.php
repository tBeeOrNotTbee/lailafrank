<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Newsletter;
use App\User;
use App\Shopcar;
use App\Address;

class ProfileController extends Controller
{
    public function showAccount()
    {
        $subs  = Newsletter::all();
        $email_list = [];

        foreach ($subs as $sub) {
            array_push($email_list, $sub->email);
        }
        return view('shopMiCuenta', compact('email_list'));
    }

    public function editAccount()
    {
        return view('shopEditarCuenta');
    }

    public function addresses()
    {
        return view('shopMisDirecciones');
    }

    public function purchases()
    {
        return view('shopCompras');
    }

    public function favorites()
    {
        return view('shopMisFavoritos');
    }


    public function newsletter()
    {
        $subs  = Newsletter::all();
        $email_list = [];

        foreach($subs as $sub){
            array_push($email_list, $sub->email);
        }
        
        return view('shopNewsletter', compact('email_list', 'subs'));
    }



    public function addressnew()
    {
        return view('shopNuevaDireccion');
    }

    public function updateAccount(Request $req){
        Request()->validate([
            'name' => ['required', 'string', 'max:250'],
            'surname' => ['required', 'string', 'max:250'],
            'email' => ['required', 'string', 'email', 'max:250'],
            'dni' => ['required', 'numeric'],
        ]);

        $data=[
            'name' => $req['name'],
            'surname' => $req['surname'],
            'email' => $req['email'],
            'dni' => $req['dni']
        ];

        $user = User::find(Auth::user()->id);
        $user->update($data);

        return redirect('/shop/myaccount');
    }

    public function shopcar()
    {
        $user = Auth::user();

        $shopcar = Shopcar::where('ordered', '=', '0')
            ->where('user_id', '=', $user->id)
            ->take(1)
            ->first();

        if (is_null($shopcar) || $shopcar->stock->isEmpty()) {
            //dd($shopcar->stock);
            return view('shopShopcar', compact('shopcar'));
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

        return view('shopShopcar', compact('shopcar', 'stocks', 'addresses'));
    }
}
