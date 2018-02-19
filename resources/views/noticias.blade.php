@extends('layouts.master')

@section('content')
{{ Breadcrumbs::render('noticia') }}
<div id="fh5co-intro" class="fh5co-section" onload="crearFormNoticia()">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<h1>Noticia</h1>
				<p class="fh5co-lead">Aqui podras crear tus noticias, para que nosotros podamos publicarlas Enviar la web.</p>
			</div>
		</div>
		<div class="row row-bottom-padded-sm">
			<div class="col-md-6" id="fh5co-content">
				<form id = 'form' action="{{url('/noticia')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
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
		</div>
		

	</div>
</div>
<script>var categories = ['hola','qe','tal'];</script>
<script src="{{ asset('js/noticias-script.js') }}"></script>
@stop