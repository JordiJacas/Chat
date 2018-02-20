@extends('layouts.master')

@section('content')
{{ Breadcrumbs::render('home') }}
<div class="fh5co-slider">
	<div class="container">
		<div class="owl-carousel owl-carousel-main">
		  <div><img href="https://antoniobalmon.blogspot.com.es/" src="{{ asset('img/BLOC_BALMON.jpg') }}" width="900px" height="293px"></div>
		  <div><img href="http://www.queferacornella.cat/teatre-i-art/cornella-escenica-aixeca-el-telo/" src="{{ asset('img/cupulaleonardo-900x400.jpg') }}" width="900px" height="293px"></div>
		  <div><img href="http://www.queferacornella.cat/nens/quatre-anys-jugant-amb-les-matematiques/" src="{{ asset('img/ESCENICA-900x400.jpg') }}" width="900px" height="293px"></div>
		</div>
	</div>
</div>
<!-- Slider -->

<div id="fh5co-intro" class="fh5co-section">
	<div class="container">
		<div class="row row-bottom-padded-md">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<h1>Noticias</h1>
				<p class="fh5co-lead"></p>
			</div>
		</div> 
		<div class="row row-bottom-padded-md">
			<div class="col-md-8 col-md-offset-2 text-center ts-intro">
				<form action="{{url('/')}}" method="post">
					{{ csrf_field() }}
					<label>Categorias: </label>
					<select name="categoria">
						<option value="-----">-----</option>
						@foreach($categorias as $keyC => $categoria)
							<option value="{{$categoria->categoria}}">{{$categoria->categoria}}</option>
						@endforeach
					</select>
					<input class="btn btn-primary" type="submit" name="cat" value="Enviar">
				</form>
			</div>
		</div> 
		<div class="row row-bottom-padded-sm">

			@foreach($arrayNoticiasT as $keyT => $noticiaT)
				@if ($cat == $noticiaT->categoria or $cat == '-----')
					@if($dateS <= $noticiaT->created_at and $date >= $noticiaT->created_at )
						<div class="col-md-6">
							<p><img src="{{$noticiaT->img}}" width="400px" class="img-responsive img-bordered"></p>
						</div>
						<div class="col-md-6 padded-top">
							<h3>{{$noticiaT->titulo}}</h3>
							<p>{{$noticiaT->descripcion}}</p>
						</div>
					@endif	
				@elseif($cat == '-----')
					<div class="col-md-6">
					<p><img src="{{$noticiaT->img}}" width="400px" class="img-responsive img-bordered"></p>
				</div>
				<div class="col-md-6 padded-top">
					<h3>{{$noticiaT->titulo}}</h3>
					<p>{{$noticiaT->descripcion}}</p>
					</div>
				@endif
			@endforeach
		</div>
		
		<div class="row row-bottom-padded-sm">
		@foreach($arrayNoticiasF as $keyF => $noticiaF)
			@if ($cat == $noticiaF->categoria or $cat == '-----')
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<span><img src="{{$noticiaF->img}}" width="300px"></img></span>
					<h3>{{$noticiaF->titulo}}</h3>
					<p>{{$noticiaF->descripcion}}</p>
				</div>
			</div>
			@endif
		@endforeach
		</div>

		<div class="row row-bottom-padded-sm">
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<img src="{{ asset('img/citilab.png') }}" width="200px"
					height="200px">
					<h3><a href="https://www.citilab.eu/">Citilab</a></h3>
					<p>Som un laboratori ciutadà que democratitza la innovació al territori i promou la societat del coneixement.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<img src="{{ asset('img/PROCORNELLA.jpg') }}" width="300px" height="200px">
					<h3><a href="http://www.procornella.cat/">ProCornella</a></h3>
					<p>
						<li>Accessible, sostenible i racional. Una transformació urbanística que ha fet de Cornellà una ciutat europeista, moderna i funcional</li>
						<li>Vocació de servei en la nostra àrea social</li>
						<li>Motor de l’economia local. Donem impuls a la creació d’ocupació, recolzem al sector empresarial</li>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<img src="{{ asset('img/esportistes.jpg') }}" width="300px" height="200px">
					<h3><a href="http://www.cornella.cat/ca/Esports.asp">Departament d'Esports</a></h3>
					<p>La missió del Departament d’Esports de l’Ajuntament de Cornellà és fomentar l’esport i l’activitat física entre la població.</p>
				</div>
			</div>
		</div>

	</div>
</div>

@stop