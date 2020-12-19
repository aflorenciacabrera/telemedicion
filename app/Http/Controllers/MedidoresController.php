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
        $facturas = Auth::user()->medidor->conexion->facturas;
        $periodo = [];
        $fecha = [];
        foreach ($facturas as $key => $value) {
            # code...
            $periodo[] = $value->ConsumoFacturado ;
            $fecha[] = $value->PeriodoFacturado;
            
        }
        
    
    //  dd( $suministro );
           
        

        // $persona = Auth::user()->persona;
        //  dd( $conexion->ConexionID );
        return view('consumos',compact("conexion","medidor","histolectura","fecha","periodo", "facturas"));
       
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
            $response['tabla'] = $data;
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
            $response['tabla'] = $data;
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
    public function periodo(request $request)
    {
        $medidor = medidor::where('Numero',$request->numero_medidor)->first();

        if($medidor)
        {
            $data = $medidor->reporte_periodo();
            $response = [];
            $response['labels'] = [];
            $response['values'] = [];
            $response['tabla'] = $data;
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
