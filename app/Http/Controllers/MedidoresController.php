<?php

namespace App\Http\Controllers;
use App\Medidor;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MedidoresController extends Controller
{
    //

    public function consumo()
    {  
        $conexion = Auth::user()->medidor->conexion;
        $medidor = Auth::user()->medidor;
        $histolectura = Auth::user()->medidor->lecturas->reverse()->take(10);

        // label X
        $fecha = ['02/07/2020','03/07/2020','05/07/2020','06/07/2020'];
        $periodo =['07/2020','08/2020', '09/2020','10/2020'];
        // datos
        $contador = ['4','8','10','12'];
        $consumo = ['4','8','10','12'];

        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('consumos',compact("conexion","medidor","histolectura","fecha","contador","periodo","consumo"));
       
    }

    public function ubicacion()
    { 
        $conexion = Auth::user()->medidor->conexion;
        $medidor = Auth::user()->medidor;
        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('ubicacionMedidor',compact("conexion","medidor"));
      
    }
}
