<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slide>
 */
class SlideFactory extends Factory
{
	public function definition(): array
	{
		return [
			'title' => ucfirst($this->faker->words(rand(1, 3), true)),
			'description' => $this->faker->sentence(),
			'link' => $this->faker->url(),
		];
	}
}
