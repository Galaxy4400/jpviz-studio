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
Route::get('/projects', ProjectsController::class)->name('projects');
Route::get('/about', AboutController::class)->name('about');
Route::get('/shop', ShopController::class)->name('shop');
Route::get('/visualization', VisualizationController::class)->name('visualization');
Route::get('/design', DesignController::class)->name('design');
Route::get('/contacts', ContactsController::class)->name('contacts');
