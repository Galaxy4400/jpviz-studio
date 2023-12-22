<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
			->each(fn (Slide $slide) =>
				media_factory($slide, fixtures_path('images/slides'), 'image')
			);

		ProjectFactory::new()
			->count(10)
			->create()
			->each(fn (Project $project) => 
				media_factory($project, fixtures_path('images/projects'), 'gallery', rand(4, 7))
			);

		CategoryFactory::new()
			->count(5)
			->create()
			->each(fn (Category $category) =>
				media_factory($category, fixtures_path('images/categories'), 'image')
			);
	}
}
