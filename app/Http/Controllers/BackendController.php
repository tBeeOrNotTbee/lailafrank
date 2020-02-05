<?php

namespace App\Http\Controllers;
use App\Shoe;
use App\Shoe_img;
use App\Color;
use App\Http\Controllers\Stock;
use App\Discount;

use Illuminate\Http\Request;

class BackendController extends Controller
{
public function pedidos(){
    return view('backend.backendPedidos');
}

public function productos(){
    $shoes = Shoe::all();

    return view('backend.backendProductos',compact('shoes'));
}

public function ventas(){
    return view('backend.backendVentas');
}

public function reporte(){
    return view('backend.backendReporte');
}

public function misGustos(){
    return view('backend.backendMisGustos');
}

public function usuarios(){
    return view('backend.backendUsuarios');
}

public function ventaMes(){
    return view('backend.backendVentaMes');
}
public function editarProducto($id){
    $shoe=Shoe::find($id);
    return view('backend.backendEditarProducto', compact('shoe'));
}
public function editarUsuario(){
    return view('backend.backendEditarUsuario');
}

public function nuevoProducto(){
    return view('backend.backendNuevoProducto');
}

public function verProducto($id, $updateOK = 0){
    $shoe=Shoe::find($id);
    return view('backend.backendVerProducto', compact('shoe'));
}

public function editarPreview($id){
    $shoe=Shoe::find($id);
    return view('backend.backendEditarPreview', compact('shoe'));
}

public function subirImagenes($id){
    $shoe=Shoe::find($id);
    return view('backend.backendSubirImagenes', compact('shoe'));
}

public function verColores ($id){
    $shoe=Shoe::find($id);
    return view('backend.backendVerColores', compact('shoe'));
}

public function guardarColor ($id){
    $shoe=Shoe::find($id);
    
    return view('backend.backendVerColores', compact('shoe'));
}

public function borrarColor($shoe_id, $id){
    Color::destroy($id);
    $stocks=Stock::where('color_id','=',$id)->get();
    $stocks->destroy;
    return redirect('/backend/verProducto/'.$shoe_id.'#color');
}

public function discounts (){
    $discounts = Discount::all();
    return view('backend.backendDescuentos', compact('discounts'));
}
}