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
/*function newChatroom(){
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
}*/

//Funcion ChatRoom de Barrios

function accederChatroom(){
	$('textarea[id=mensaje]').removeAttr('disabled');
	$('button[id=send]').removeAttr('disabled');
	var chatroomName = $('#room1').text();
	var newimg = $('<img src="http://localhost:8000/img/avatar.png" alt="User Avatar" class="img-circle"></img>');
	var txtimg = "BotAyuntamiento";
	var newspan = $('<span class="chat-img1 pull-left"></span>').append(newimg).append(txtimg);
	var newp = $('<p></p>').text("Bienvenidos a la ChatRoom "+chatroomName);
	var newdiv2 = $('<div class="chat_time pull-right"></div>').text("09:30");
	var newdiv1 = $('<div class="chat-body1 clearfix"></div>').append(newp).append(newdiv2);
	var newli = $('<li class="left clearfix"></li>').append(newspan).append(newdiv1);
	$('.chat_area').first().append(newli);
}

//start funcion Ajax enviar mensaje a la base de datos
$(document).ready(function() {
    /*$().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });*/
    
    $('#formulario').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
            	
            }
        })
        
        return false;
    }); 
}) 
//end Funcion Ajax

setInterval(function printar(){
	$.getJSON("/api/mensajes", function(datos){
		limpiar();
		for(var i=0; i<datos.length;i++){
			var user_name = JSON.stringify(datos[i].id_usuario);
			var mensaje = JSON.stringify(datos[i].descripcion);
			var dia_hora = JSON.stringify(datos[i].created_at);

			var newimg = $('<img src="http://localhost:8000/img/avatar.png" alt="User Avatar" class="img-circle"></img>');
			var txtimg = user_name;
			var newspan = $('<span class="chat-img1 pull-left"></span>').append(newimg).append(txtimg);
			var newp = $('<p></p>').text(mensaje);
			var newdiv2 = $('<div class="chat_time pull-right"></div>').text(dia_hora);
			var newdiv1 = $('<div class="chat-body1 clearfix"></div>').append(newp).append(newdiv2);
			var newli = $('<li id="newli" class="left clearfix"></li>').append(newspan).append(newdiv1);
			$('#ul').append(newli);
}
	});
}, 1000);

//funcion limpieza

function limpiar(){

	$('#ul').empty();
}