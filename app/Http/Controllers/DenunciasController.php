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
        $f->id_usuario = Auth::id();
        $f->descripcion = $request->input('message');
        $f->latLng = $request->input('latLng');
        $f->nombrecalle = $request->input('nombreCalle');
        $ruta = 'App/denuncia';
        $name = $request->file('img')->move($ruta);
        $f->img = $name;
        $f->save();

        return redirect('denuncia');

    }
}

