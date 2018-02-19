
//Ejecuta la funcion crearFormNoticia al cargar toda la pagina.
$(document).ready(crearFormNoticia);

/*
** Funcion que se ejecuta al llamarla, crea inputs y lables segun el tipo.
** Entrada: string id, string text, string type, string name
** Salida: string
*/
function crearCampos(id,texto,type,name){

	var label = '<label for="'+id+'">'+texto+'</label>';
	var div = '<div class="form-group"></div>';
	
	if(type == 'submit'){

		var input = '<input type="'+type+'" class="btn btn-primary" value="'+texto+'">';
		var campo = $(div).append(input);	
	}else if(type == 'textarea'){

		var textoarea = '<textarea style="resize:none "name="'+name+'" id="'+id+'" cols="30" rows="10" class="form-control"></textarea>';
		var campo = $(div).append(label,textoarea);
	}else if(type == 'checkbox'){

		var input = '<input type="'+type+'" name="'+name+'" value=1>' + texto
		var campo = $(div).append(input);
	}else if(type == 'file'){

		var input = '<input type="'+type+'" name="'+name+'">'
		var campo = $(div).append(label,input);
	}else if(type == 'text'){

		var input = '<input name="'+name+'" type="'+type+'" class="form-control" id="'+id+'">';
		var campo = $(div).append(label,input);	
	}else if(type == 'select'){
		
		var opcions;
		var input = "<select></select>";
	
		var campo = $(div).append(label,input);
	}

	return campo;
}


/*
** Funcion que se ejecuta al cargar la pagina "noticias.blade.php"
** Entrada: NULL
** Salida: NULL
*/
function crearFormNoticia(){
	
	var cTitulo = crearCampos('titulo', 'Titulo', 'text', 'titulo');
	var cTextarea = crearCampos('descripcion', 'Descripcion', 'textarea', 'descripcion');
	var cSubmit = crearCampos(' ', 'Enviar', 'submit', ' ');
	var cCheckbox = crearCampos('check', ' Prioritario', 'checkbox', 'check');
	var cImg = crearCampos('file', '', 'file', 'img');
		
	$('#form').append(cTitulo,cTextarea,cCheckbox,cImg,cSubmit);
}


/*
** Funcion que se ejecuta al llarmarla, lee formato json
** Entrada: NULL
** Salida: 
*/
function lee_json(){
	$.getJSON("/api/categorias", function(datos){
		alert(datos);
	});
}





































