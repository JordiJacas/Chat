<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class CategoriasController extends Controller
{
	public function index(){
    	return view('welcome');
    }

	public function store(Request $request){
		
		$cat = $request->input("categoria");
		$noticiasF = Noticia::orderBy('created_at','desc')->where('prioritario', 0)->get();
		$categorias = Noticia::distinct()->get(['categoria']);
		$noticiasT = Noticia::orderBy('created_at','desc')->where('prioritario', 1)->get();
		
		return view('welcome',["arrayNoticiasT"=>$noticiasT, "arrayNoticiasF"=>$noticiasF, "categorias"=>$categorias, "cat"=>$cat]);
	}
}
