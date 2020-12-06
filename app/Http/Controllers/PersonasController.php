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
        $medidor = Medidor::find(3167888)->conexion;
        // $persona = Persona::find(3167888)->conexiones;
        return view('perfil',compact('medidor'),compact('persona'));
    }
}
