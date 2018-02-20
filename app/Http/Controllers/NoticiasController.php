<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
	
	public function index(){
    	return view('noticias');
    }
	
    public function store(Request $request){
		
        $prioritario = $request->input('check');
    	$n = new Noticia();
		$n->titulo = $request->input('titulo');
    	$n->descripcion = $request->input('descripcion');
        $n->categoria = ucfirst($request->input('cat'));
        if($prioritario != ""){
            $n->prioritario = $request->input('check');
        }
        $ruta = 'App/noticias';
        $name = $request->file('img')->move($ruta);
        $n->img = $name;		
    	$n->save();
		
        return view('noticias');

    }
}
