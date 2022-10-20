<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{

    public function index(){

        return view('web.contactanos');
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' =>'required|email',
            'empresa' => 'required',
            'celular' =>'required|numeric',
            'pais' => 'required',
            'url' => 'required',
            'sector' => 'required',
            'servicio' => 'required',
            'mensaje' =>'required',
            'presupuesto' =>'required'
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('jesus.ramirez9@unmsm.edu.pe')->send($correo);

        return redirect()->route('contacto')->with('info','Mensaje enviado');
    }
}
