<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturista extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'lecturistas';
    protected $primaryKey = 'Codigo';
}
