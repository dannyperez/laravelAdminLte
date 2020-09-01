<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send() {
        $name = 'developermail';
            // Mail::send()El valor de retorno de está vacío, puede probar con otros métodos.
        Mail::send('emails.test',['name'=>$name],function($message){
            $to = 'perezdann@gmail.com';
            $message ->to($to)->subject('Prueba de correo');
        });
            // Se devuelve una matriz de error, utilícela para determinar si la transmisión es exitosa
        dd(Mail::failures());
    }
}
