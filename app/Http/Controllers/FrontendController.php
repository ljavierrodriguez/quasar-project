<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Banner;
use App\Feature;

class FrontendController extends Controller
{
    public function index(){
        $banners = Banner::get();
        $features = Feature::get();
        return view('welcome', compact('banners', 'features'));
    }

    public function sendEmail(Request $request){

        //var_dump($request->input());
        
        
        $data = [
            'data' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]
        ];

        Mail::send('emails.template', $data, function ($message) {
            $message->subject('Mensaje desde Contacto'); // Asunto del Correo 
            $message->to('lrodriguez@4geeks.co'); // Correo al que llegara el mensaje           
        });

        return redirect()->route('pagina.principal')->with('status', 'Mensaje Enviado Exitosamente');

        
    }
}
