<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'conexiones';
    protected $primaryKey = 'ConexionID';
    // protected $primaryKey  = 'ConexionID';


    public function medidor()
    {
        return $this->hasOne("App\Medidor",'ConexionID','ConexionID');
    }

    public function facturas()
    {
        return $this->hasMany("App\Factura",'ConexionID','ConexionID')->orderBy("Renglon",'ASC');
    }

    public function persona()
    {
        return $this->hasOne('App\Persona','PersonaID','TitularID');
    }
  
  


}
