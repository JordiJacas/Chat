<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Illuminate\Support\Facades\Auth;

class ChatroomController extends Controller
{
    public function index(){
        return view('chat');
    }
   public function store(Request $request){
        $f = new Chat();
        $f->descripcion = $request->input('Alfonso V');
        $f->id_usuario = Auth::id();
        $f->save();
        return view('chat');

    }
}
