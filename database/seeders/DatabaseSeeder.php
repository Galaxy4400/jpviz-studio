<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Slide;
use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Factories\AdminFactory;
use Database\Factories\SlideFactory;
use Database\Factories\ProductFactory;
use Database\Factories\ProjectFactory;
use Database\Factories\CategoryFactory;
use Database\Factories\PageFactory;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		AdminFactory::new()->createOne([
			'email' => 'admin@admin.ru',
			'password' => bcrypt('1234'),
			'name' => 'Admin',
		]);

		PageFactory::new()->count(10)->create();

		SlideFactory::new()
			->count(2)
			->create()
			->each(fn (Slide $slide) =>
				media_factory($slide, fixtures_path('images/slides'), 'image')
			);

		ProjectFactory::new()
			->count(2)
			->create()
			->each(fn (Project $project) => 
				media_factory($project, fixtures_path('images/projects'), 'gallery', rand(4, 7))
			);

		CategoryFactory::new()
			->count(1)
			->create()
			->each(fn (Category $category) =>
				media_factory($category, fixtures_path('images/categories'), 'image')
			);

		ProductFactory::new()
			->count(3)
			->create()
			->each(fn (Product $product) =>
				media_factory($product, fixtures_path('images/products'), 'gallery', rand(1, 5))
			);
	}
}
