<?php

namespace App\Http\Controllers;
use App\Medidor;
use Illuminate\Http\Request;

class MedidoresController extends Controller
{
    //

    public function consumo()
    {  
        $medidor = Medidor::find(3167888)->lecturas;
        return view('consumos',compact('medidor'));
    }

    public function ubicacion()
    { 
        $medidor = Medidor::find(3167888)->conexion;
        return view('ubicacionMedidor',compact('medidor'));
    }
}
