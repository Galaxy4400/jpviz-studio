<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Slide;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Database\Factories\SlideFactory;
use Database\Factories\ProjectFactory;
use Database\Factories\CategoryFactory;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		SlideFactory::new()
			->count(2)
			->create()
			->each(fn (Slide $slide) => $slide
				->copyMedia(getRandomFile(base_path('tests/Fixtures/images/slides')))
				->toMediaLibrary('image')
		);

		ProjectFactory::new()
			->count(10)
			->create()
			->each(fn (Project $project) =>
				repeat(rand(4, 8), fn () => $project
					->copyMedia(getRandomFile(base_path('tests/Fixtures/images/projects')))
					->toMediaCollection('gallery')
				)
			);

		CategoryFactory::new()->count(5)->create();
	}
}
