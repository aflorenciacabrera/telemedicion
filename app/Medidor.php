<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'Medidores';
    protected $primaryKey = 'Numero';


    public function lecturas()
    {
       return  $this->hasMany('App\HistoLectura','Numero','Numero')->orderBy('Fecha_Hora','ASC');
    }

    public function consumo()
    {

        ///ultima lectura menos ultimo valor leido de suminitros
      try {
        $ultima = $this->lecturas->last()->Contador1;//ultima lectura

        $suministro = $this->conexion->suministros->last()->ValorLeido;
        

        $consumo = $ultima-$suministro;

        if($consumo < 0)
        {
            $consumo = $consumo + pow(10,$this->Digitos);///correccion
        }

        return round($consumo,0, PHP_ROUND_HALF_DOWN);
      } catch (\Throwable $th) {
          return '-';
      }

    }

   

    public function conexion()
    {
        return $this->belongsTo("App\Conexion",'ConexionID','ConexionID')->where("SuministroID",$this->SuministroID);
    }

    public function reporte_diario()
    {
        
        //te devuevlo un array de 24 elemento
        ///seria desde hoy 
        //obtener dia y minuto de ultima lectur
        $ultima = $this->lecturas->last();//ultima lectura

        $hoy = Date("Y-m-d",strtotime($ultima->Fecha_Hora));///dp cambiamos por Date("Y-m-d H:i")
        $ayer = Date("Y-m-d H",strtotime($ultima->Fecha_Hora." - 23 hours"));///

        
        // return $ayer;
        $lecturas = HistoLectura::where('Numero',$this->Numero)
        ->whereDate('Fecha_Hora',"=",$hoy)
        // ->WhereDate('Fecha_Hora',">=",$ayer)
        ->orderBy('Fecha_Hora','DESC')->get();

       
        
        // return $lecturas->count();
        //el mas alto esta primero
        // return $lecturas;
        // obtengo 1 por hora
        $_maximos = [];
        foreach ($lecturas as $lectura) 
        {
             $hora = date("H",strtotime($lectura->Fecha_Hora));

             $existe = false;
            foreach ($_maximos as $key => $m) 
            {
                if($m['hora'] == $hora)
                {
                    $existe = true;
                }
            }


             if(!$existe)
             {
                 
                $_maximos[] = 
                [
                    "hora"=>$hora,
                    "t_hora"=>date("H:i",strtotime($lectura->Fecha_Hora)),
                    "t_dia"=>date("d-m-Y",strtotime($lectura->Fecha_Hora)),
                    "dia"=>date("d/m/Y",strtotime($lectura->Fecha_Hora)),
                    "label"=>date("H:i",strtotime($lectura->Fecha_Hora)),
                    "valor"=>round($lectura->Contador1,0, PHP_ROUND_HALF_DOWN)
                ];   
             }
        }
       
      $_maximos = array_reverse($_maximos);
        foreach ($_maximos as $key => $reg) 
        {
       
            if(isset($_maximos[$key - 1]))
            {
                    

                    $_maximos[$key]["x"] = $_maximos[$key]["valor"] - $_maximos[$key - 1]["valor"];

                    if($_maximos[$key]["x"] < 0)
                    {
                       
                        $_maximos[$key]["x"] += $_maximos[$key]["x"] + pow(10,$this->Digitos);///correccion
                    }

            }
        }

        $_maximos[0]["x"] =   $_maximos[1]["x"];

        return ($_maximos);//devuelvo al reves parael grafico

    }

    public function reporte_semanal()
    {
        
        //te devuevlo un array de 24 elemento
        ///seria desde hoy 
        //obtener dia y minuto de ultima lectur
        $ultima = $this->lecturas->last();//ultima lectura

        $hoy = Date("Y-m-d",strtotime($ultima->Fecha_Hora));///dp cambiamos por Date("Y-m-d H:i")
        $ayer = Date("Y-m-d",strtotime($ultima->Fecha_Hora." - 7 days"));///

        $lecturas = HistoLectura::where('Numero',$this->Numero)->where(function($q) use ($hoy,$ayer){
            $q->whereDate('Fecha_Hora',">=",$ayer);
        })
        ->orderBy('Fecha_Hora','ASC')->get();
        //el mas alto esta primero
        
        // obtengo 1 por hora
        $_maximos = [];
        foreach ($lecturas as $lectura) 
        {
             $dia = date("Y-m-d",strtotime($lectura->Fecha_Hora));//dia

            $existe = false;
            foreach ($_maximos as $key => $m) 
            {
                if($m['dia'] == $dia)
                {
                    $existe = true;
                }
            }


             if(!$existe)
             {
                $_maximos[] = 
                [
                    "dia"=>$dia,
                    "t_hora"=>date("H:i",strtotime($lectura->Fecha_Hora)),
                    "t_dia"=>date("d-m-Y",strtotime($lectura->Fecha_Hora)),
                    "label"=>date("d/m/Y",strtotime($lectura->Fecha_Hora)),
                    "valor"=>round($lectura->Contador1,0, PHP_ROUND_HALF_DOWN)
                ];   
             }
        }
       
    //   $_maximos = array_reverse($_maximos);
        foreach ($_maximos as $key => $reg) 
        {
       
            if(isset($_maximos[$key - 1]))
            {
                    

                    $_maximos[$key]["x"] =  $_maximos[$key]["valor"] - $_maximos[$key - 1]["valor"];
                    if($_maximos[$key]["x"] < 0)
                    {
                        $_maximos[$key]["x"]  = $_maximos[$key]["x"] = $_maximos[$key]["x"] + pow(10,$this->Digitos);///correccion
                    }
            }
        }

        array_shift($_maximos);

        return ($_maximos);//devuelvo al reves para el grafico

    }


    public function reporte_periodo()
    {
        
        ///periodo actual es todas las lecturaas mayores a el ultimo valor leido en suministros

        $suministro = $this->conexion->suministros->last();
        $ultimo_valor = $suministro->ValorLeido;
        

        $lecturas = HistoLectura::where('Numero',$this->Numero)->where(function($q) use ($ultimo_valor){
            $q->where('Contador1',">=",$ultimo_valor);
        })
        ->orderBy('Fecha_Hora','ASC')->get();
        //el mas alto esta primero
        
        // obtengo 1 por hora
        $_maximos = [];
        foreach ($lecturas as $lectura) 
        {
             $dia = date("Y-m-d",strtotime($lectura->Fecha_Hora));//dia

            $existe = false;
            foreach ($_maximos as $key => $m) 
            {
                if($m['dia'] == $dia)
                {
                    $existe = true;
                }
            }


             if(!$existe)
             {
                $_maximos[] = 
                [
                    "dia"=>$dia,
                    "t_hora"=>date("H:i",strtotime($lectura->Fecha_Hora)),
                    "t_dia"=>date("d-m-Y",strtotime($lectura->Fecha_Hora)),
                    "label"=>date("d/m/Y",strtotime($lectura->Fecha_Hora)),
                    "valor"=>round($lectura->Contador1,0, PHP_ROUND_HALF_DOWN)
                ];   
             }
        }
       
    //   $_maximos = array_reverse($_maximos);
        foreach ($_maximos as $key => $reg) 
        {
       
            if(isset($_maximos[$key - 1]))
            {
                    

                    $_maximos[$key]["x"] = $_maximos[$key]["valor"] - $_maximos[$key - 1]["valor"];
                    if($_maximos[$key]["x"] < 0)
                    {
                        $_maximos[$key]["x"] = $_maximos[$key]["x"] + pow(10,$this->Digitos);///correccion
                    }
            }
        }

        $_maximos[0]["x"] =   $_maximos[1]["x"];
        array_shift($_maximos);

        return ($_maximos);//devuelvo al reves para el grafico

    }


    

    
}
