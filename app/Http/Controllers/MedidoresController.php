<?php

namespace App\Http\Controllers;
use App\Medidor;
use App\Persona;
use Illuminate\Http\Request;

class MedidoresController extends Controller
{
    //

    public function consumo()
    {  
        $conexion = Medidor::find(3167888)->conexion; //10427424 
        $medidor = Medidor::where('ConexionID',$conexion->ConexionID)->get()->first();
        $persona = Persona::where('PersonaID',10427424)->get()->first();
        //  dd( $conexion->ConexionID );
        return view('consumos',compact("conexion","medidor","persona"));
       
    }

    public function ubicacion()
    { 
        $conexion = Medidor::find(3167888)->conexion; //10427424 
        $medidor = Medidor::where('ConexionID',$conexion->ConexionID)->get()->first();
        $persona = Persona::where('PersonaID',10427424)->get()->first();
        //  dd( $conexion->ConexionID );
        return view('ubicacionMedidor',compact("conexion","medidor","persona"));
      
    }
}
