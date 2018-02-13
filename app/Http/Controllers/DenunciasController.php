<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denuncia;
use Illuminate\Support\Facades\Auth;

class DenunciasController extends Controller
{
    public function index(){
    	return view('denuncia');
    }

    public function store(Request $request){
    	$f = new Denuncia();
    	$f->descripcion = $request->input('message');
        $ruta = 'App/storage';
        $name = $request->file('img')->move($ruta);
        $f->img = $name;
        $f->id_usuario = Auth::id();
    	$f->save();
        return view('denuncia');

    }
}

