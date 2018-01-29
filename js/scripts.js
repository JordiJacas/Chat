$(ejecutar);
function ejecutar(){
	$('input[name=ini_debate]').click(iniciar_debate);
}

function iniciar_debate(){
	$('.submit').append('<p>Introduce tu nombre de Usuario:</p>');
	$('.submit').append($('<input type="text" id="user_name">'));
	$('.submit').append('<p>Escribe :</p>');
	$('.submit').append($('<textarea id="text_debate" rows="4" cols="50">'));
	$('input[name=ini_debate]').attr('disabled', 'true');
	$('.submit').append($('<input type="button" id="debate_text" name="env_debate" value="Enviar">'))
	$('input[name=env_debate]').click(enviar_debate);
}

function enviar_debate(){
	var user_name = document.getElementById('user_name').value;
	var text_debate = document.getElementById('text_debate').value;
	var user_p = $('<p></p>').text(user_name+' :');
	var debate_p = $('<p></p>').text(text_debate);
	$('.debates').after($('<div class="debates">')).append(user_p).append(debate_p);
	
}

