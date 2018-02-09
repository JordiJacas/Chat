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
						<label for="name">Nombre</label>
						<input name="nombre" type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="message">Mensaje</label>
						<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="images">Imagen</label>
						<div class="form-inline">
							<div class="form-group">
								<input type="file" name="file[]" id="js-upload-files" multiple="true">
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						<button class="btn btn-default" type="reset">Reset</button>
					</div>	
				</form>
				<?php

				?>
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
		<script type="text/javascript">
			$("#file-3").fileinput({
			showCaption: false,
			browseClass: "btn btn-primary btn-lg",
			fileType: "any"
			});
		</script>
		&nbsp;

	</div>
</div>
@stop