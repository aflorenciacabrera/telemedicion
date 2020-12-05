<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'personas';
    protected $primary_key = 'PersonaId';
}
