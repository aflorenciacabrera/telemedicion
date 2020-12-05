<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedidoresController extends Controller
{
    //

    public function consumo()
    {
        return view('consumos');
    }

    public function ubicacion()
    {
        return view('ubicacionMedidor');
    }
}
