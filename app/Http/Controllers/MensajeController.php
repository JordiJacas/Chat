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
        $f->name_user = Auth::user()->name;
    	$f->descripcion = $request->input('mensaje');
    	$f->id_chat = $request->input('id_chat');
    	$f->save();
        //return view('chat');
        return json_encode($request->input('mensaje'));

    }
}
