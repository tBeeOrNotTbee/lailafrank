<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Newsletter;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function add (Request $req){
        $email = $req->email;
        $user_id = "";
        if (Auth::user()) {
            $user_id = Auth::id();
        }
        
        $datos = [
            "email" => $email, 
            "user_id" => $user_id,
        ];
        $newsletter = new Newsletter($datos); 
        $newsletter->save() ;
        return $datos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletterlist = Newsletter::all();
        $users = User::all();
        $users_id = [];
        foreach ($users as $user){
            array_push($users_id, $user->id) ;
        }
        return view('backend.backendnewsletter', compact('newsletterlist', 'users_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {   
       $data = [
           "email" => $req["email"]
           
       ];
       return view('backend.backendNewsletter', compact("var"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter, Request $request)
    {
        $email = $request->email;
        $unsubscribe = Newsletter::where('email', $email)->delete();
        return redirect('/shop/myaccount/newsletter');
    }
}