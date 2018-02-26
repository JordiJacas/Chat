<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;
use Illuminate\Support\Facades\Auth;

class RespuestaController extends Controller
{
    public function index(){
        return view('denuncia');
    }

    public function store(Request $request){

    	$f = new Respuesta();
		$f->id_usuario = Auth::id();
    	$f->descripcion = $request->input('texto_respuesta');
    	$f->id_denuncia = $request->input('id_denuncia');
    	$f->save();

        return redirect('denuncia');

    }
}
