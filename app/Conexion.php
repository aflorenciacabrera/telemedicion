<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'Conexiones';
    protected $primaryKey = 'ConexionID';
    // protected $primaryKey  = 'ConexionID';


    public function medidor()
    {
        return $this->hasOne("App\Medidor",'ConexionID','ConexionID');
    }

    public function suministros()
    {
        return $this->hasMany("App\suministro",'ConexionID','ConexionID')->orderBy("ID_Suministro","ASC");
    }
    // ->orderBy("Renglon",'ASC')

    public function persona()
    {
        return $this->hasOne('App\Persona','PersonaID','TitularID');
    }
  
  


}
