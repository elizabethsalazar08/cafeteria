<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    //
    public function getPedidos(){
        $detalles=Detalle::orderBy('nombre','asc')->get();
        return view('verPedidos',compact('detalles'));
    }
}
