<?php

namespace App\Http\Controllers;
use App\Shoe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        return view('home');
    }

    // Verificacion de permisos Admin

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles(‘admin’);
        return view(‘some.view’);
    }

    public function catalog()
    {
        $shoes = Shoe::all();
        return view('catalog', compact('shoes'));
    }

    public function productDetail($shoeId)
    {
        $shoe = Shoe::find($shoeId);
        $imgs = $shoe->shoe_img()->where('category_id', '=', 4)->get();
        return view('catalog-item', compact('shoe', 'imgs'));
    }
}
