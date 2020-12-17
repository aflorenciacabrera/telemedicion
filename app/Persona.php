<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $connection = 'mysql2';
    protected $table = 'Personas';
    protected $primaryKey = 'PersonaID';//37043025
    public $incrementing = false;


    public function conexiones()
    {
        return $this->hasMany('App\Conexion','TitularID','PersonaID');
    }

    /**
     * Despues de Instaciar la Persona con su DNI , checkeo todos sus medidos para ver si concide con el numero del login
     */
    public function check_medidor($numero_medidor)//4383065
    {
        // return $this->conexiones->count();
        foreach ($this->conexiones as $conexion) 
        {            
            if($conexion->medidor->Numero == $numero_medidor)
            {
                return true;
            }
        }
        return false;
    }

    

}
