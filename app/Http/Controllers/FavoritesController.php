<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Shoe;

class FavoritesController extends Controller
{
    public function changeState($shoeId)
    {
        $user = Auth::user();
        $shoe = Shoe::find($shoeId);

        $user->favorites()->toggle($shoeId);

        if ($shoe->isFavorite() == true){
            return json_encode($state=true);
        }else{
            return json_encode($state=false);
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
