<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Shoe;

class FavoritesController extends Controller
{
    public function changeState($shoeId)
    {
        if (Auth::user()) {
            $user = Auth::user();
            $shoe = Shoe::find($shoeId);
            
            $user->favorites()->toggle($shoeId);
            
            if ($shoe->isFavorite() == true){
                $state = ['state'=>true];
                return json_encode($state);
            }else{
                $state = ['state'=>false];
                return json_encode($state);
            }
        }else{
            $state = ['state'=>'notLogged'];
            return json_encode($state);
        }
    }

    public function changeState2($shoeId)
    {
        $user = Auth::user();
        $shoe = Shoe::find($shoeId);

        $user->favorites()->toggle($shoeId);

        return redirect()->back();
    }
}
