$(document).ready(crearFormNoticia);

function crearCampos(id,text,type,name){

	var label = '<label for="'+id+'">'+text+'</label>';
	var div = '<div class="form-group"></div>';
	
	if(type == 'submit'){

		var input = '<input type="'+type+'" class="btn btn-primary" value="'+text+'">';
		var campo = $(div).append(input);	
	}else if(type == 'textarea'){

		var textarea = '<textarea style="resize:none "name="'+name+'" id="'+id+'" cols="30" rows="10" class="form-control"></textarea>';
		var campo = $(div).append(label,textarea);
	}else if(type == 'checkbox'){

		var input = '<input type="'+type+'" name="'+name+'" value=True>' + text
		var campo = $(div).append(input);
	}else if(type == 'file'){

		var input = '<input type="'+type+'" name="'+name+'" value=True>'
		var campo = $(div).append(label,input);
	}else if(type == 'text'){

		var input = '<input name="'+name+'" type="'+type+'" class="form-control" id="'+id+'">';
		var campo = $(div).append(label,input);	
	}else if(type == 'select'){

		var input = "<select>"+

					"</select>";
		var campo = $(div).append(label,input);
	}

	return campo;
}

function crearFormNoticia(){
	var form = "<form action='#' method='post'></form>"

	var cTitulo = crearCampos('titulo', 'Titulo', 'text', 'titulo');
	var cTextarea = crearCampos('descripcion', 'Descripcion', 'textarea', 'descripcion');
	var cSubmit = crearCampos(' ', 'Enviar', 'submit', ' ');
	var cCheckbox = crearCampos('check', ' Prioritario', 'checkbox', 'check');
	var cImg = crearCampos('file', '', 'file', 'img');
	var cSelect = crearCampos('', '', 'select', '');
	
	lee_json();

	//form = $(form).append(cTitulo,cTextarea,cCheckbox,cImg,cSubmit);
	//form = $(form).append(cSelect);
	$('#fh5co-content').append(form);
}

function lee_json(){
	$.getJSON("/api/categorias", function(datos){
	   alert(JSON.stringify(datos)); 
	});
}
