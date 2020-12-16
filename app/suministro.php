<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suministro extends Model
{
    //
    //
    protected $connection = 'mysql2';
    protected $table = 'suministros';
    protected $primaryKey = 'ID_suministro';

    public function conexion(){
        return $this->hasOne('App\Conexion','ConexionID','ConexionID');
    }
}
