<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Medidor;

class Conexion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'Conexiones';
    // protected $primaryKey = 'ConexionID';
    // protected $primaryKey  = 'ConexionID';


    public function obtenerMedidor($suministro)
    {
        // return $this->hasOne("App\Medidor",'ConexionID','ConexionID');

        $medidor = Medidor::where(['ConexionID'=>$this->ConexionID,'SuministroID'=>$suministro])->first();
        return $medidor;
    }

    public function suministros()//para no romper dejo las dos relaciones con distinto nombre
    {
        return $this->hasMany("App\Factura",'ConexionID','ConexionID')->where('NumeroSuministro',$this->SuministroID)->orderBy("PeriodoFacturado","ASC");
    }
    public function facturas()
    {
        return $this->hasMany("App\Factura",'ConexionID','ConexionID')->where('NumeroSuministro',$this->SuministroID)->orderBy("PeriodoFacturado","ASC");
    }
    // ->orderBy("Renglon",'ASC')

    public function persona()
    {
        return $this->hasOne('App\Persona','PersonaID','TitularID');
    }
  
  


}
