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
        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('consumos',compact("conexion","medidor","persona"));
       
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
