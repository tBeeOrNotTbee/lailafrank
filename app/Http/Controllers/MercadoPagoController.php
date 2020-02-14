<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function success(Request $req){
        $dd = compact(dd($req));
        //Descontar STOCK 
        // BUSCAR PAYMENT ORDER Y ASIGNARLE ESTADO DE ACREDITADO
        // DEVOLVER VISTA CON PAYMENT ORDERS DEL USUARIO
        // shopcart -> ordered = 1 (esta ordenado)
        return view('shopCompras', $dd);
    }
}
