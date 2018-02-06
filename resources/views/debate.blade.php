@extends('layouts.master')

@section('content')
<div id="fh5co-intro" class="fh5co-section">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<h1>Debates</h1>
				<p class="fh5co-lead">Aqui podras podras iniciar un debate, entrar en uno creado y responder a otras personas. (o algo por el estilo)</p>
			</div>
		</div>
		<div class="row row-bottom-padded-sm">
			<div class="col-md-6" id="fh5co-content">
					<div class="form-group">
					<label for="name">Nombre del Usuario</label>
					<input type="text" id="user_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Nombre del debate</label>
					<input type="text" class="form-control" id="debate_name">
				</div>
				<div class="form-group">
					<label for="message">Contenido del debate</label>
					<textarea name="message" id="text_debate" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="ini_debate" class="btn btn-primary" onclick="enviar_debate()" value="Enviar">
				</div>
			</div>
			<div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
				<div id="debates" class="fh5co-contact-info">
					<h3>Debates Creados</h3>

				</div>
				
			</div>
		</div>
		

	</div>
</div>
@stop