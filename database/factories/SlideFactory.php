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
			'title' => $this->faker->words(rand(1, 3), true),
			'description' => $this->faker->sentence(),
			'image' => $this->faker->fixturesImage('slides'),
			'link' => $this->faker->url(),
		];
	}
}
