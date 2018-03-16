<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Debate;
use Illuminate\Support\Facades\Auth;

class DebateController extends Controller
{
    public function index(){
        return view('debate');
    }
    public function store(Request $request){

    	$f = new Debate();
        $f->id_usuario = Auth::id();
        $f->descripcion = $request->input('descripcion');
        $f->mensaje = $request->input('mensaje');
        $f->save();

        return redirect('debate');
    }
}