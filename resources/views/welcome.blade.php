@extends('layouts.master')

@section('content')

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
		<div class="row row-bottom-padded-sm">
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<span><img src="{{ asset('img/escolabressol.jpg') }}" width="300px"></img></span>
					<h3>Cornellà reclama també a la Generalitat els pagaments pendents de les escoles bressol des de 2015 fins ara</h3>
					<p>El consistori fixa en 2.528.834 euros la quantitat a pagar per l'administració autonòmica, en compliment dels convenis dels cursos 2015-16, 2016-17 i, de l'actual, 2017-18</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<span><img src="{{ asset('img/fontsantarender.jpg') }}" width="300px"></img></span>
					<h3>Cornellà invertirà 5 milions d'euros en 2018</h3>
					<p>També s'inclouen en aquestes inversions vuit projectes sorgits del procés de ‘pressupostos participatius'</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="fh5co-service text-center">
					<span><img src="{{ asset('img/complexaquatic.jpg') }}" width="300px"></img></span>
					<h3>Vine a bufar les espelmes del 5è aniversari del Complex Esportiu Can Mercader!</h3>
					<p>Arriba a aquesta data amb 2.349 abonats, amb una mitjana d'usos diaris que superen les 800 persones</p>
				</div>
			</div>
		</div>
		<div class="row row-bottom-padded-sm">
			<div class="col-md-6">
				<p><img src="{{ asset('img/Marta_Mata.JPG') }}" width="400px" class="img-responsive img-bordered"></p>
			</div>
			<div class="col-md-6 padded-top">
				<h3>Conferència: Jaume I el Conqueridor</h3>
				<p>Conferència sobre aquest sobirà que va ampliar de manera extraordinària els territoris de la Corona d'Aragó durant els 58 anys que regnà en el segle XIII.</p>
				<ul class="ul_style_1">
					<li>Dia: 01/02/18</li>
					<li>Hora: 19h</li>
					<li>Lloc: sala Titan</li>
					<li>A càrrec de David González Dins del cicle "Els dijous amb història" organitzat per Òmnium Cultural</li>
				</ul>
			</div>
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