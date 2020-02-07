<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

class ProfileController extends Controller
{
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
