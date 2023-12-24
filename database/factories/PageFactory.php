<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
	public function definition(): array
	{
		return [
			'title' => $this->faker->words(2, true),
			'body' => $this->faker->text(),
		];
	}
}
