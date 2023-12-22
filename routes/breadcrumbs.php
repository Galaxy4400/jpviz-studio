<?php

use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
	$trail->push('Home', route('home'));
});


Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('About', route('about'));
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


Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Projects', route('projects'));
});

Breadcrumbs::for('project', function (BreadcrumbTrail $trail, Project $project) {
	$trail->parent('projects');
	$trail->push($project->title, route('projects', $project));
});


Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
	$trail->parent('home');
	$trail->push('Shop', route('shop'));
});

Breadcrumbs::for('shop.category', function (BreadcrumbTrail $trail, Category $category) {
	$trail->parent('shop');
	$trail->push($category->title, route('shop.category', $category));
});

Breadcrumbs::for('shop.product', function (BreadcrumbTrail $trail, Product $product) {
	$trail->parent('shop.category', $product->category);
	$trail->push($product->title, route('shop.product', $product));
});