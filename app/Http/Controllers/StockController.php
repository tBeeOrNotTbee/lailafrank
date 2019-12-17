<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Shoe;
use App\Place;
use Illuminate\Http\Request;

class StockController extends Controller
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
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show($place_id)
    {
        $stocks = Stock::where('place_id', '=', $place_id)->get();
        $place = Place::find($place_id);
        return view('backendstock', ['stocks'=>$stocks, 'place'=>$place, 'stockM' => 'true']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }

    public function guardarStock(Request $req){
        $this->validate($req, [
            "shoe_id"=>"integer|required",
            "size"=>"integer|required",
            "color_id"=>"integer|required",
            "quantity"=>"integer|required",
            "place_id"=>"integer|required"
        ]);

        $stock = Stock::create([
            "shoe_id"=>$req->shoe_id,
            "size"=>$req->size,
            "color_id"=>$req->color_id,
            "quantity"=>$req->quantity,
            "place_id"=>$req->place_id
        ]);

        return redirect('/backend/verProducto/'.$req->shoe_id.'#stock');
    }

    public function borrarStock(Request $req){
        Stock::destroy($req->id);
        return redirect('/backend/verProducto/'.$req->shoe_id.'#stock');
    }
}
