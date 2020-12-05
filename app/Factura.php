<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'facturas';
    protected $primaryKey  = null;

}
