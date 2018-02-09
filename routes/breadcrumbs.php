<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home -> Denuncia
Breadcrumbs::register('denuncia', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
    $breadcrumbs->push('Denuncia', route('denuncia'));
});

// Home -> Debate
Breadcrumbs::register('debate', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
    $breadcrumbs->push('Debate', route('debate'));
});