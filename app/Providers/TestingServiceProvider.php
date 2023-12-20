<?php

namespace App\Providers;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;
use App\Supports\Faker\Providers\FakerImageProvider;


class TestingServiceProvider extends ServiceProvider
{
	
	public function register(): void
	{
		$this->app->afterResolving(Generator::class, function (Generator $faker) {
			$faker->addProvider(new FakerImageProvider($faker));
		});
	}

	
	public function boot(): void
	{
		//
	}
}
