<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Newsletter;

use App\User;

class ProfileController extends Controller
{
    public function showAccount()
    {
        return view('shopMiCuenta');
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
}
