<?php

use Illuminate\Support\Facades\File;


if (!function_exists('getRandomFile')) {
	function getRandomFile(string $dir): string
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