@extends('layouts.master')

@section('content')
{{ Breadcrumbs::render('debate') }}
<div id="fh5co-intro" class="fh5co-section">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<h1>Debates</h1>
				<p class="fh5co-lead">Aqui podras podras iniciar un debate, entrar en uno creado y responder a otras personas. (o algo por el estilo)</p>
			</div>
		</div>
		<form action="{{url('debate')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="row row-bottom-padded-sm">
				<div id="div_debates" class="col-md-6" id="fh5co-content">
					<!--<div class="form-group">
						<label>Nombre del debate</label>
						<input name="descripcion" type="text" class="form-control" id="debate_name">
					</div>
					<div class="form-group">
						<label for="message">Contenido del debate</label>
						<textarea name="mensaje" id="text_debate" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="ini_debate" class="btn btn-primary">Enviar</button>
					</div>-->
					<p><button id="" type="button" name="ini_debate" class="btn btn-primary" onclick="nuevo_debate()"> Crear Nuevo Debate</button></p>
					<hr>
				</div>
				<div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
					<div id="debates" class="fh5co-contact-info">
						<h3>Debates Creados</h3>
							
							<?php
								$debates = DB::table('debates')->get();

								foreach ($debates as $debate)
								{
									echo "<div id='debate_".$debate->id."' style='background-color: #ebebe0'>";
									echo "<p><b>Usuario</b></p>";
									echo "<p>".$debate->id_usuario."</p>";
									echo "<p><b>Nombre del Debate</b></p>";
								    echo "<p>".$debate->descripcion."</p>";
								    echo "<p><b>Mensaje</b></p>";
								    echo "<p>".$debate->mensaje."</p>";
								    echo "<p><b>Respuestas</b></p>";
								    echo "<div id='repuesta_".$debate->id."'></div>";
								    echo "<p><button id='btn_responder' type='button' onclick='responder(".$debate->id.")'>Responder</button></p>";
								    echo "</div>";
								    echo "<hr>";
								}
							?>
					</div>
							
				</div>
			</div>
		</form>

	</div>
</div>
@stop