<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\CategoryFactory;
use Database\Factories\ProjectFactory;
use Database\Factories\SlideFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		SlideFactory::new()->count(2)->create();

		ProjectFactory::new()->count(10)->create();

		CategoryFactory::new()->count(5)->create();
	}
}
