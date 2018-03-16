<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newchatroom;
use Illuminate\Support\Facades\Auth;

class NewchatController extends Controller
{
    //
    public function index(){
        return view('chat');
    }
    public function store(Request $request){
        $f = new Newchat();
        $f->descripcion = $request->input('nombre');
        $f->password = $request->input('pass');
        $f->id_usuario = Auth::id();
        $f->save();
        return view('chat');

    }
}
