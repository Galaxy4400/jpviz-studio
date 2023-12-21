<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
	public function definition(): array
	{
		return [
			'title' => ucfirst($this->faker->words(rand(1, 3), true)),
		];
	}
}
