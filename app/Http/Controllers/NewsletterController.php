<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function add (Request $req){
        return json_encode($req->email);
    }
}
