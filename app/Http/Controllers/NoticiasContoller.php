<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Auth;

class NoticiasContoller extends Controller
{
	
	public function index(){
    	return view('noticia');
    }
	
    public function store(Request $request){
		
    	$n = new Noticia();
		$n = titulo = $request->input('titulo');
    	$n->descripcion = $request->input('descripcion');
		$n-> prioritario = $request->input('check');
		
        //$ruta = 'App/storage';
        //$name = $request->file('img')->move($ruta);
        //$f->img = $name;
        //$n->id_usuario = Auth::id();
		
    	$n->save();
		
        return view('denuncia');

    }
}
