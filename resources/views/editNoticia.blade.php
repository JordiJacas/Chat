@extends('layouts.master')

@section('content')
	
<div class="col-md-6" id="fh5co-content">
	<form id="form" action="{{url('actualizar/'.$noticia->id)}}" method="get" enctype="multipart/form-data">
			<div class="form-group">
				@if($noticia->prioritario == 1)
					<input name="check" value="1" type="checkbox" checked> Prioritario
				@elseif($noticia->prioritario == 0)
					<input name="check" value="1" type="checkbox" > Prioritario
				@endif
			</div>
		</form>
</div>


<!-- Script para crear el formulario  -->
<script>

	$(document).ready(crearFormEditar);

	function crearCampos(id,texto,type,name){

		var label = "<label for='"+id+"'>"+texto+"</label>";
		var div = "<div class='form-group'></div>";
		
		if(type == 'submit'){

			var input ="<input type='"+type+"' class='btn btn-primary' value='"+texto+"'>";
			var campo = $(div).append(input);	
		}else if(type == 'textarea'){

			var textoarea = "<textarea style='resize:none' name='"+name+"' id='"+id+"' cols='30' rows='10' class='form-control'>{{$noticia->descripcion}}</textarea>";
			var campo = $(div).append(label,textoarea);
		}else if(type == 'file'){

			var img = "<img src='{{$noticia->img}}' width='100px' class='img-responsive img-bordered'>";
			var input = "<input type='"+type+"' name='"+name+"''>"
			var urlImg = "<input value='{{$noticia->img}}' name = 'urlImg' type='hidden'>";
			var campo = $(div).append(img,label,input,urlImg);
		}else if(type == 'text'){

			var input = "<input value='{{$noticia->titulo}}' name='"+name+"' type='"+type+"' class='form-control' id='"+id+"'>";
			var campo = $(div).append(label,input);	
		}else if(type == 'categoria'){

			var input = "<input value='{{$noticia->categoria}}' name='"+name+"' type='"+type+"' class='form-control' id='"+id+"'>";
			var campo = $(div).append(label,input);	
		}
		return campo;
	}

	function crearFormEditar(){

		var cTitulo = crearCampos('titulo', 'Titulo', 'text', 'titulo');
		var cTextarea = crearCampos('descripcion', 'Descripcion', 'textarea', 'descripcion');
		var cSubmit = crearCampos(' ', 'Actualizar', 'submit', ' ');
		var cImg = crearCampos('file', '', 'file', 'img');
		var cCategoria = crearCampos('cat', 'Categoria', 'categoria', 'cat');
			
		$('#form').append(cTitulo, cTextarea, cCategoria,cImg,cSubmit);
	}

</script>
@stop