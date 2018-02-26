@extends('layouts.master')

@section('content')
{{ Breadcrumbs::render('denuncia') }}
<div id="fh5co-intro" class="fh5co-section">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<h1>Denuncia</h1>
				<p class="fh5co-lead">Aqui podras enviar tus denuncias, para que nosotros podamos encargarnos de ellas. (o algo por el estilo)</p>
			</div>
		</div>
		<div class="row row-bottom-padded-sm">
			<div class="col-md-6" id="fh5co-content">
				<form action="{{url('denuncia')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
					<div class="form-group">
						<label for="message">Mensaje</label>
						<textarea style="resize: none" name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<div class="form-inline">
							<div class="form-group">
								<input type="file" name="img" id="file"></input>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						<button class="btn btn-default" type="reset">Reset</button>
					</div>	
				</form>
			</div>
			<div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
				<div class="fh5co-contact-info">
					<h3>Informacion</h3>
					<address>
						08940 Cornellà de Llobregat
					</address>
					<p>Tel.: 933 770 212</p>
					<p>Email: <a href="#">informacio@aj-cornella.cat</a></p>
					<p>Website: <a href="http://www.cornella.cat/ca/index.asp?idioma=ca">www.cornella.cat</a></p>
				</div>
				
			</div>
			<div class="row row-bottom-padded-sm">
				<div class="col-md-8 col-md-offset-2 text-center ts-intro">
					<h1>Denuncia Realizadas</h1>
				</div>
			</div>

				@foreach($arrayDenuncias as $key => $denuncia)
					<div class='col-md-4' style='display: inline-block;'>
						<p class="text-center">{{$denuncia->descripcion}}</p>
						<br><img src='{{$denuncia->img}}' width='300px' height='200px'>
						<br>

						<button class="btn btn-primary">Respuestas</button>
						<hr>
						@foreach($arrayRespuesta as $key => $respuesta)
							@if($respuesta->id_denuncia == $denuncia->id)
								<div class="form-group respuestasDenuncia">
									{{$respuesta->descripcion}}
								</div>
							@endif
						@endforeach
						<hr>
						@if( Auth::user()->admin == 1)
							<form action="respuesta_denuncia" method="post">
							{{csrf_field()}}
								<input type="text" name="id_denuncia" style="display:none;" value="{{$denuncia->id}}">
								<textarea style="resize: none" class="form-control" name="texto_respuesta"></textarea>
								<br>
								<input class="btn btn-primary" type="submit" name="submit_respusta" value="Responder">
							</form>
						@endif
					</div>
				@endforeach
		</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/denuncia-script.js') }}"></script>
@stop