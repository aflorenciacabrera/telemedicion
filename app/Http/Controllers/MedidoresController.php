<?php

namespace App\Http\Controllers;
use App\Medidor;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Details;
use PhpParser\Node\Expr\Cast\Array_;

class MedidoresController extends Controller
{
    //

    public function consumo()
    {  
        $conexion = Auth::user()->medidor->conexion;
        $medidor = Auth::user()->medidor;
        $histolectura = Auth::user()->medidor->lecturas->reverse()->take(10);
        $suministro = Auth::user()->medidor->conexion->suministros;

        
    //  dd( $suministro );
           
        // label X
        $fecha = ['02/07/2020','03/07/2020','05/07/2020','06/07/2020'];
        $periodo =['07/2020','08/2020', '09/2020','10/2020'];
        // datos
        $contador = ['4','8','10','12'];
        $consumo = ['4','8','10','12'];
        

        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('consumos',compact("conexion","medidor","histolectura","fecha","contador","periodo","consumo", "suministro"));
       
    }

    public function ubicacion()
    { 
        $conexion = Auth::user()->medidor->conexion;
        $medidor = Auth::user()->medidor;
        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('ubicacionMedidor',compact("conexion","medidor"));
      
    }


    public function diario(request $request)
    {
        $medidor = medidor::where('Numero',$request->numero_medidor)->first();

        if($medidor)
        {
            $data = $medidor->reporte_diario();
            $response = [];
            $response['labels'] = [];
            $response['values'] = [];
            foreach ($data as $d) 
            {
                $response['labels'][] = $d["label"];
                $response['values'][] = $d["x"];
            }
            return response()->json($response,200);
        }
        else
        {
            return response('error',400);
        }
    }
    public function semanal(request $request)
    {
        $medidor = medidor::where('Numero',$request->numero_medidor)->first();

        if($medidor)
        {
            $data = $medidor->reporte_semanal();
            $response = [];
            $response['labels'] = [];
            $response['values'] = [];
            foreach ($data as $d) 
            {
                $response['labels'][] = $d["label"];
                $response['values'][] = $d["x"];
            }
            return response()->json($response,200);
        }
        else
        {
            return response('error',400);
        }
    }
}
