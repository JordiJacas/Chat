<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Denuncia;
use App\Chat;
use Carbon\Carbon;
use App\Respuesta;

class ChatController extends Controller
{
    public function getWelcome()
	{	
		$date = Carbon::now()->subDays(7);
		Noticia::where('prioritario', '1')
				->where('created_at','<=', $date)
				->update(['prioritario'=>'0']);

		$cat = '-----';
		$noticiasF = Noticia::orderBy('created_at','desc')->where('prioritario', 0)->get();
		$categorias = Noticia::distinct()->get(['categoria']);
		$noticiasT = Noticia::orderBy('created_at','desc')->where('prioritario', 1)->get();
		
		return view('welcome',["arrayNoticiasT"=>$noticiasT, "arrayNoticiasF"=>$noticiasF, "categorias"=>$categorias, "cat"=>$cat, "date"=>$dateHoy, "dateS"=>$dateS]);
	}

	public function getDenuncia()
	{
		$denuncias = Denuncia::all();
		$respuesta = Respuesta::all();
   		return view('denuncia',["arrayDenuncias"=>$denuncias, "arrayRespuesta"=>$respuesta]);
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

		$chats = Chat::all();
		return view('chat',["chats"=>$chats]);
	}
}
