<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocialFactory extends Factory
{
	protected $model = \App\Models\Social::class;

	public function definition(): array
	{
		return [
			'social_name' => $this->faker->randomElement([
				'Twitter', 'Facebook', 'Instagram', 'LinkedIn', 'TikTok', 'GitHub', 'YouTube', 'Reddit', 'Snapchat', 'Pinterest',
			]),
			'social_link' => $this->faker->url(),
			'display_text' => $this->faker->catchPhrase(),
			'image_path' => $this->faker->imageUrl(64, 64, 'abstract', true, 'social'),
		];
	}
}
