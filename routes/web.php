<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\VisualizationController;


Route::get('/', HomeController::class)->name('home');

Route::get('/about', AboutController::class)->name('about');

Route::get('/visualization', VisualizationController::class)->name('visualization');

Route::get('/design', DesignController::class)->name('design');

Route::get('/contacts', ContactsController::class)->name('contacts');


Route::controller(ProjectsController::class)
	->prefix('projects')
	->group(function () {
		Route::get('/', 'index')->name('projects');
		Route::get('/{project}', 'project')->name('project');
	}
);


Route::controller(ShopController::class)
	->prefix('shop')
	->group(function () {
		Route::get('/', 'index')->name('shop');
		Route::get('/category/{category}', 'category')->name('shop.category');
		Route::get('/product/{product}', 'product')->name('shop.product');
	}
);
