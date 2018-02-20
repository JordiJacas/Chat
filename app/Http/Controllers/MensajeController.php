<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensaje;
use Illuminate\Support\Facades\Auth;

class MensajeController extends Controller
{
    public function index(){
        return view('chat');
    }

    public function store(Request $request){

    	$f = new Mensaje();
		$f->id_usuario = Auth::id();
    	$f->descripcion = $request->input('mensaje');
    	$f->id_chat = "1";
    	$f->save();
        //return view('chat');
        return json_encode($request->input('mensaje'));

    }
}
