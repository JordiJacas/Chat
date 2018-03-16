/**
*@fileoverview/@summary: Es un formulario para crear un debate en el que puedes responder.
*@author: Adrià Garcia-Fraile Pérez (SKADI)
*creation: 12/03/18
*/


/**
*Funcion que crea un formulario en el html.
*@constructor
*@return {object} Jquery - devuelve todas las etiquetas creadas y las añade a la etiqueta con el id div_debates.
*/
function nuevo_debate(){
	// ...
	
	var newlabel1 = $('<label></label').text('Nombre del debate');
	var newinput1 = $('<input name="descripcion" type="text" class="form-control" id="debate_name"></input>');
	var newdiv1 = $('<div class="form-group"></div>').append(newlabel1).append(newinput1);
	var newlabel2 = $('<label></label').text('Contenido del debate');
	var newtextarea = $('<textarea name="mensaje" id="text_debate" cols="30" rows="10" class="form-control"></textarea>');
	var newdiv2 = $('<div class="form-group"></div>').append(newlabel2).append(newtextarea);
	var newbutton = $('<button type="submit" name="ini_debate" class="btn btn-primary"></button>').text('Enviar'); 
	var newdiv3 = $('<div class="form-group"></div>').append(newbutton);
	$('#div_debates').append(newdiv1).append(newdiv2).append(newdiv3);
}


/** 
*Esta funcion crea un textarea para poder responder a los debates creados
*@constructor
*@param {string} id - Es el id actual del div donde esta el boton en el que el usuario ha clicado.
*@return {object} Jquery - devuelve todas las etiquetas creadas y las añade a la etiqueta con el id btn_responder.
*/
function responder(id){
	// ...
	
	var respuesta_text = $('<textarea id="text_respuesta" cols="20" rows="5" class="form-control"></textarea>')
	var btn_respuesta = $('<input id="btn_respuesta" class="btn btn-primary" onclick="enviar_respuesta()" value="Enviar"></input>')
	$('#debate_'+id).append(respuesta_text).append(btn_respuesta);
	var val_respuesta = $('#text_respuesta').val();

	$('#btn_responder').hide();
}


/** 
*Esta funcion muestra el boton responder y esconde el textarea y el boton de enviar la respuesta
*@constructor
*@return {object} Jquery - devuelve que las etiquetas con el id text_respuesta y btn_respuesta no se muestren y que la etiqueta con el id btn_responder se muestre.
*/
function enviar_respuesta(){
	// ...
	
	$('#btn_responder').show();
	$('#text_respuesta').hide();
	$('#btn_respuesta').hide();
}
