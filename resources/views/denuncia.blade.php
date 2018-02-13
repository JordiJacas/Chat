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
				<form action="#" method="post">
					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="message">Mensaje</label>
						<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
<<<<<<< HEAD
						<input type="submit" class="btn btn-primary" value="Enviar">
=======
						<label for="images">Imagen</label>
						<div class="form-inline">
							<div class="form-group">
								<input type="file" name="img" id="file"></input>
							</div>
						</div>
>>>>>>> c957ee77356d984dcd8281cb36e1f6e18138aa30
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
				<?php
					$denuncias = DB::table('denuncia')->get();
					foreach ($denuncias as $denuncia) {
						# code...
						echo "<div class='col-md-4 text-center' style='display: inline-block;'>
							<p>".$denuncia->descripcion."</p>
							<br><img src='".$denuncia->img."' width='300px' height='200px'>
							<hr>
							</div>";
					}
				?>
		</div>
<<<<<<< HEAD
		

=======
>>>>>>> c957ee77356d984dcd8281cb36e1f6e18138aa30
	</div>
</div>
@stop