<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Carbon\Carbon;

class ChatController extends Controller
{
    public function getWelcome()
	{	
		$dateHoy = Carbon::now();
		$dateS = Carbon::now()->subDays(7);
		$cat = '-----';
		$noticiasF = Noticia::orderBy('created_at','desc')->where('prioritario', 0)->get();
		$categorias = Noticia::distinct()->get(['categoria']);
		$noticiasT = Noticia::orderBy('created_at','desc')->where('prioritario', 1)->get();
		
		//return $current;
		return view('welcome',["arrayNoticiasT"=>$noticiasT, "arrayNoticiasF"=>$noticiasF, "categorias"=>$categorias, "cat"=>$cat, "date"=>$dateHoy, "dateS"=>$dateS]);
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
