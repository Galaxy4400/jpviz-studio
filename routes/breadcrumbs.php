<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
	$trail->push('Home', route('home'));
});

Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Projects', route('projects'));
});

Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('About', route('about'));
});

Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Shop', route('shop'));
});

Breadcrumbs::for('visualization', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Visualization', route('visualization'));
});

Breadcrumbs::for('design', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Design', route('design'));
});

Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Contacts', route('contacts'));
});

