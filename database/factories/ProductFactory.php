<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
	public function definition(): array
	{
		return [
			'category_id' => Category::query()->inRandomOrder()->value('id'),
			'title' => ucfirst($this->faker->words(3, true)),
			'description' => $this->faker->text(50),
			'content' => $this->faker->text(),
			'price' => $this->faker->numberBetween(1000, 100000) * 100,
		];
	}
}
