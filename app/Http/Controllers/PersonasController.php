<?php

namespace App\Http\Controllers;

use App\Medidor;
use App\Persona;
use App\User;
use App\Conexion;
use Illuminate\Http\Request;
// use Hash;
use Illuminate\Support\Facades\Hash;
// use Auth;
use Illuminate\Support\Facades\Auth;
class PersonasController extends Controller
{
    //

    public function login(request $request)
    {
        $conexion = conexion::where(['TitularID'=>$request->titular,'SuministroID'=>$request->suministro])->first();
     
        if($conexion != null)//existe
        {
            $persona = $conexion->persona;
            if($persona != null)
            {
                $medidor = $conexion->medidor;
                if($medidor!== null)
                {
                    
                    //todo ok registro al usuario
                    $user = User::where("medidor_numero",$request->medidor)->first();

                    if($user)
                    {
                        //si existe lo logue y vuelvo a home
                    }
                    else
                    {
                        //si no existe lo registro 
                        $user = $this->registrar($persona,$medidor->Numero,$request->suministro);
                        
                    }
                    Auth::login($user);
                    return redirect()->route("home");

                }
                else
                {
                    return redirect()->back()->withErrors([
                        'medidor'=>"No se encontro medidor para el Titular"
                        ])->withInput();
                }
            }
            else
            {
                return redirect()->back()->withErrors([
                    'medidor'=>"No se encontro el titular"
                    ])->withInput();
            }
        }
        else
        {
            return redirect()->back()->withErrors([
                                'medidor'=>"No se encontro conexion para el Titular"
                                ])->withInput();
        }


    }

    // public function login(request $request)
    // {

    //     $persona = Persona::where("PersonaID",$request->dni)->first();

    //     if($persona)//existe
    //     {
    //         if($persona->check_medidor($request->medidor))
    //         {
    //             // DNI y MEDIDO OK
    //             //ya existe el usuario ?
    //             $user = User::where("medidor_numero",$request->medidor)->first();

    //             if($user)
    //             {
    //                 //si existe lo logue y vuelvo a home
                  
    //             }
    //             else
    //             {
    //                 //si no existe lo registro 
    //                 $user = $this->registrar($persona,$request->medidor);
                 
    //             }
    //             Auth::login($user);
    //             return redirect()->route("home");
    //         }
    //         else
    //         {
    //             return redirect()->back()->withErrors([
    //                 'medidor'=>"No se encontro el medidor para este titular"
    //                 ])->withInput();
    //         }
            
    //     }
    //     else
    //     {
    //         ///retur con errores
    //         return redirect()->back()->withErrors([
    //             'dni'=>"El DNI ingresado no correponde a un titular"
    //             ])->withInput();
    //     }


    // }

    public function registrar($persona,$medidor,$suminstro)
    {
        $user = new user();
        $user->email = $medidor;
        $user->name = $persona->Apellido." ".$persona->Nombre;
        $user->password = Hash::make($persona->DocNro);
        $user->medidor_numero = $medidor;
        $user->personaID = $persona->PersonaID;
        $user->SuministroID = $suminstro;
        $user->save();
        return $user;
    }

    public function perfil()
    {
        // $conexion = Medidor::find(3167888)->conexion; //10427424 
        // $medidor = Medidor::where('ConexionID',$conexion->ConexionID)->get()->first();
        // $persona = Persona::where('PersonaID',$conexion->TitularID)->get()->first();

        $conexion = Auth::user()->medidor->conexion;
        $histolectura = Auth::user()->medidor->lecturas->last();
        $medidor = Auth::user()->medidor;
        $persona = Auth::user()->persona;
        $suministro = Auth::user()->medidor->conexion->suministros->last();

        //    dd( $histolectura);
        
         return view('perfil',compact("conexion","medidor","persona","histolectura","suministro"));
        
       
    }
}
