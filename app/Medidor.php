<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidor extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'medidores';
    protected $primaryKey = 'Numero';


    public function lecturas()
    {
       return  $this->hasMany('App\HistoLectura','Numero','Numero')->orderBy('Fecha_Hora','ASC');
    }

    public function conexion()
    {
        return $this->belongsTo("App\Conexion",'ConexionID','ConexionID');
    }

    
}
