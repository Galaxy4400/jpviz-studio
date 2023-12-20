<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slide>
 */
class SlideFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'title' => $this->faker->words(rand(1, 3), true),
			'description' => $this->faker->sentence(),
			'image' => $this->faker->loremflickr('images/slides', 1920, 1080),
			'link' => $this->faker->url(),
		];
	}
}
