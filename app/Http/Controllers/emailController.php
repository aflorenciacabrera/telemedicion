<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
class emailController extends Controller
{
    //


    public function test()
    {


        $data = array(

        );
        $userCorreo = "sambranaivan@gmail.com";
        $titulo = "Pueba de envio.";
        Mail::send('email.envio_user_cuarentena', $data, function ($message) use ($userCorreo,$titulo) {
          $message->from('sigecc@corrientes.gob.ar', 'SiGeCC');
          $message->to($userCorreo)->subject('.-'.$titulo);
    

          return "ok";


        });
    }
}
