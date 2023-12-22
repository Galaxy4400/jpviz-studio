<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


if (!function_exists('d')) {
	function d(mixed ...$vars): void
	{
		dump(...$vars);
	}
}


if (!function_exists('fixtures_path')) {
	function fixtures_path(string $path = ''): mixed
	{
		return base_path('tests/Fixtures/' . trim($path, '/\\'));
	}
}


if (!function_exists('random_file')) {
	function random_file(string $dir): string
	{
		$files = File::files($dir);

		$randomFile = $files[rand(0, count($files) - 1)];

		return $randomFile;
	}
}


if (!function_exists('repeat')) {
	function repeat(int $times, callable $callback): void
	{
		if ($times < 0) {
			throw new InvalidArgumentException('The value should not be less than zero');
		}

		for ($i=0; $i < $times; $i++) { 
			$callback();
		}
	}
}


if (!function_exists('media_factory')) {
	function media_factory(Model $model, string $filesDir = '', string $mediaCollection ='', int $count = 1): void
	{
		repeat($count, fn () => $model
			->copyMedia(random_file($filesDir))
			->toMediaCollection($mediaCollection)
		);
	}
}