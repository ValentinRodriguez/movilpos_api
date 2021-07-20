<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use Mail;

class officeMailController extends Controller
{
    public function index(Request $request) {
        // $data = array('name'=>"Hola Mundo");
        $template_path = 'email_template';

        // Mail::send(['html'=> $template_path ], $data, function($message) {
        //     $message->to('valentinrodriguez1427@gmail.com', 'Receiver Name')->subject('Titulo del correo');
        //     $message->from('vrodriguez@marmotech.com.do','Hola Mundo');
        // });

        $data["email"] = "valentinrodriguez1427@gmail.com";
        $data["title"] = "From ItSolutionStuff.com";
        $data["body"] = "This is Demo";
 
        $files = [
            public_path('doc1.txt'),
            public_path('doc2.txt'),
        ];
  
        Mail::send(['html'=> $template_path ], $data, function($message)use($data, $files) {
            $message->to('valentinrodriguez1427@gmail.com', 'Receiver Name')->subject('Titulo del correo');
            $message->from('vrodriguez@marmotech.com.do','Hola Mundo');
 
            foreach ($files as $file){
                $message->attach($file);
            }
            
        });

        return "El correo ha sido enviado";
    }
}
