<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FacturasController extends Controller
{
    //

    public function facturacion()
    {
        setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
        $conexion = Auth::user()->medidor->conexion;
        // $histolectura = Auth::user()->medidor->lecturas->last();
        $medidor = Auth::user()->medidor;
        $persona = Auth::user()->persona;
        // $factura = Auth::user()->medidor->conexion->facturas->last()->paginate(10);
        //$user_grupo = user::query()->select('grupo')->distinct()->get();
        $facturaDatos = Auth::user()->medidor->conexion->facturas->last();
        $facturas = Auth::user()->medidor->conexion->facturas()->paginate(10);
        //  $factura = 1;
        // dd($suministroDatos);
        return view('facturacion',compact("conexion","medidor","persona", "facturas","facturaDatos"));
    }
}
