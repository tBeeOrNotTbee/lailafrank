<?php

namespace App\Http\Controllers;
use App\Shoe;
use App\Shoe_img;
use App\Color;
use App\Http\Controllers\Stock;

use Illuminate\Http\Request;

class BackendController extends Controller
{
public function pedidos(){
    return view('backendpedidos');
}

public function productos(){
    $shoes = Shoe::all();

    return view('backendproductos',compact('shoes'));
}

public function ventas(){
    return view('backendventas');
}

public function reporte(){
    return view('backendreporte');
}

public function misGustos(){
    return view('backendmisGustos');
}

public function usuarios(){
    return view('backendusuarios');
}

public function ventaMes(){
    return view('backendventaMes');
}
public function editarProducto($id){
    $shoe=Shoe::find($id);
    return view('backendeditarProducto', compact('shoe'));
}
public function editarUsuario(){
    return view('backendeditarUsuario');
}

public function nuevoProducto(){
    return view('backendnuevoProducto');
}

public function verProducto($id, $updateOK = 0){
    $shoe=Shoe::find($id);
    return view('backendverProducto', compact('shoe'));
}

public function editarPreview($id){
    $shoe=Shoe::find($id);
    return view('backendeditarPreview', compact('shoe'));
}

public function subirImagenes($id){
    $shoe=Shoe::find($id);
    return view('backendsubirImagenes', compact('shoe'));
}

public function verColores ($id){
    $shoe=Shoe::find($id);
    return view('backendverColores', compact('shoe'));
}

public function guardarColor ($id){
    $shoe=Shoe::find($id);
    
    return view('backendverColores', compact('shoe'));
}

public function borrarColor($shoe_id, $id){
    Color::destroy($id);
    $stocks=Stock::where('color_id','=',$id)->get();
    $stocks->destroy;
    return redirect('/backend/verProducto/'.$shoe_id.'#color');
}
}