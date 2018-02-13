<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getWelcome()
	{
   		return view('welcome');
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
}
