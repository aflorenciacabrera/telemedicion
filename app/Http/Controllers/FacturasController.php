<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FacturasController extends Controller
{
    //

    public function facturacion()
    {
        $facturas = Auth::user()->medidor->conexion->factura;
        return view('facturacion',compact("facturas"));
    }
}
