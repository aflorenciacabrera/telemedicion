<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'conexiones';
    protected $primary_key = 'ConexionID';
    // protected $primaryKey  = 'ConexionID';
}
