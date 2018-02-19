//Funcionalidad del chat

//Funcion crear ChatRoom
function crearChatroom(){
	limpiar();
	
	var newlabel1 = $('<label></label>').text("Nombre de la ChatRoom");
	var newinput1 = $('<input name="cr-name" type="text" class="form-control" id="cr-name"></input>');
	var newbutton = $('<button type="submit" onclick="newChatroom()" name="submit" class="btn btn-primary">Crear</button>');
	
	var newform = $('<form id="new-cr" method="post"></form>').append(newlabel1).append(newinput1).append(newbutton);
	var newli = $('<li class="left clearfix"></li>').append(newform);
	$('.chat_area').first().append(newli);

}

//Funcion ChatRoom Nueva
function newChatroom(){

	//AJAX
	var url = '{{url("chat")}}';
	var desc = $('#cr-name').val();
	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type:'post',
		url: url,
		data:{

		}
	});


	var cr_name = $('#cr-name').val();
	var newimg = $('<img src="http://localhost:8000/img/avatar.png" alt="User Avatar" class="img-circle"></img>');
	var newspan = $('<span class="chat-img pull-left"></span>').append(newimg);
	var newstrong1 = $('<strong class="primary-font"></strong>').text(cr_name);
	var newstrong2 = $('<strong class="pull-right"></strong>').text('10:30');
	var newstrong3 = $('<strong class="primary-font"></strong>').text('Jacas');
	var newdiv3 = $('<div class="contact_sec"></div>').append(newstrong3);
	var newdiv2 = $('<div class="header_sec"></div>').append(newstrong1).append(newstrong2);
	var newdiv1 = $('<div class="chat-body clearfix"></div>').append(newdiv2).append(newdiv3);
	var newli = $('<li onclick="accederChatroom(this)" class="left clearfix"></li>').append(newspan).append(newdiv1);

	$('.member_list').first().append(newli);
	limpiar();
}

//Funcion ChatRoom de Barrios

function accederChatroom(){
	limpiar();
	$('textarea[id=mensaje]').removeAttr('disabled');
	$('a[id=send]').removeAttr('disabled');
	limpiar();
	var chatroomName = "Nombre1";//$('.left clearfix').text();
	var newimg = $('<img src="http://localhost:8000/img/avatar.png" alt="User Avatar" class="img-circle"></img>');
	var txtimg = "BotAyuntamiento";
	var newspan = $('<span class="chat-img1 pull-left"></span>').append(newimg).append(txtimg);
	var newp = $('<p></p>').text("Bienvenidos a la ChatRoom "+chatroomName);
	var newdiv2 = $('<div class="chat_time pull-right"></div>').text("09:30");
	var newdiv1 = $('<div class="chat-body1 clearfix"></div>').append(newp).append(newdiv2);
	var newli = $('<li class="left clearfix"></li>').append(newspan).append(newdiv1);
	$('.chat_area').first().append(newli);

}


//funcion enviar mensaje

function enviarMensaje(){

	var newmens = $('#mensaje').val();
	if (newmens != ""){
		var newimg = $('<img src="http://localhost:8000/img/avatar.png" alt="User Avatar" class="img-circle"></img>');
		var txtimg = "Usuario1";
		var newspan = $('<span class="chat-img1 pull-left"></span>').append(newimg).append(txtimg);
		var newp = $('<p></p>').text(newmens);
		var newdiv2 = $('<div class="chat_time pull-right"></div>').text("09:30");
		var newdiv1 = $('<div class="chat-body1 clearfix"></div>').append(newp).append(newdiv2);
		var newli = $('<li class="left clearfix"></li>').append(newspan).append(newdiv1);
		$('.chat_area').first().append(newli);
	}
	var limpiar = $("#mensaje");
    limpiar.val("");
}


//funcion limpieza

function limpiar(){

	$('#ul').remove();
}