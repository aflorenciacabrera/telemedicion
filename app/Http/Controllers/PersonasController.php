<?php

namespace App\Http\Controllers;

use App\Medidor;
use App\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    //

    public function perfil()
    {
        $conexion = Medidor::find(3167888)->conexion; //10427424 
        $medidor = Medidor::where('ConexionID',$conexion->ConexionID)->get()->first();
        $persona = Persona::where('PersonaID',$conexion->TitularID)->get()->first();
        //  dd( $conexion->ConexionID );
        return view('perfil',compact("conexion","medidor","persona"));
    }
}
