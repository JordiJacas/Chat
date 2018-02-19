<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class ChatController extends Controller
{
    public function getWelcome()
	{	
		$noticiasF = Noticia::all()->where('prioritario', false);
		$noticiasT = Noticia::all()->where('prioritario', True);
   		return view('welcome',["arrayNoticiasF"=>$noticiasF],["arrayNoticiasT"=>$noticiasT]);
	}

	public function getDenuncia()
	{
   		return view('denuncia');
	}

	public function getDebate()
	{
   		return view('debate');
	}

	public function getSession()
	{
   		return view('iSession');
	}

	public function getNoticia()
	{
   		return view('noticias');
	}
	public function getChat(){
		return view('chat');
	}
}
