<?php

namespace App\Providers;

use App\View\Composers\NavigationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

	public function register(): void
	{
		//
	}


	public function boot(): void
	{
		Vite::macro('image', fn (string $asset) => $this->asset("resources/img/{$asset}"));

		View::composer('*', NavigationComposer::class);
	}
	
}
