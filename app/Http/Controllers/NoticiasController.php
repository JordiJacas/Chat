<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
    
    public function index(){
        return view('noticias');
    }
    
    public function store(Request $request){
		
        $prioritario = $request->input('check');

    	$n = new Noticia();
		$n->titulo = $request->input('titulo');
    	$n->descripcion = $request->input('descripcion');
        $n->categoria = ucfirst($request->input('cat'));

        if($prioritario != ""){
            $n->prioritario = $request->input('check');
        }
        
        $ruta = 'App/noticias';
        $name = $request->file('img')->move($ruta);
        $n->img = $name;

    	$n->save();
        
        return view('noticias');
    }

    public function getEditar($id){

        $noticia = Noticia::findOrFail($id);
        return view('editNoticia',['noticia'=>$noticia]);
    }

    public function update($id, Request $request){
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        $categoria = ucfirst($request->input('cat'));
        $ruta = 'App/noticias';

        $name = $request->file('img');
        if($name != ""){
            $name = $request->file('img')->move($ruta);
        }else{
            $name = $request->input('urlImg');
        }

        $prioritario = $request->input('check');

        if($prioritario != ""){
            $prioritario = 1;
        }else{
            $prioritario = 0;
        }



        Noticia::where('id',$id)->update(['titulo'=>$titulo,'descripcion'=>$descripcion,'categoria'=>$categoria,'img'=>$name,'prioritario'=>$prioritario]);
        

       return redirect('editarNoticia/'.$id);
    }
}