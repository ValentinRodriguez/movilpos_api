<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiResponseController;

use Illuminate\Http\Request;
use Twilio\Rest\Client; 

class MensajeriaWScontroller extends ApiResponseController
{
    public function send(Request $request,$mensaje, $telefono) {
         
        $sid    = "AC17d9010ec76f46ae67020be41ed1cec2"; 
        $token  = "157e4578c4452a954a1b7743018c1ddd"; 
        $twilio = new Client($sid, $token); 

        $message = $twilio->messages 
                  ->create("whatsapp:".$telefono, // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => $mensaje
                           ) 
                  ); 
 
        return $this->successResponse($message->sid, $request->urlRequest);  
    }
}
