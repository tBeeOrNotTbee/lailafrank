<?php

namespace App\Http\Controllers;

use App\Shoe_img;
use Illuminate\Http\Request;

class Shoe_imgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Shoe_img  $shoe_img
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe_img $shoe_img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoe_img  $shoe_img
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe_img $shoe_img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoe_img  $shoe_img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe_img $shoe_img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoe_img  $shoe_img
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe_img $shoe_img)
    {
        //
    }

    public function eliminar($idimg, $idShoe){
        Shoe_img::destroy($idimg);
        return redirect('/backend/verProducto/'.$idShoe.'#shoeimg');
    }
}
