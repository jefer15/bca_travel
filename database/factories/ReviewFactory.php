<?php

namespace Database\Factories;

use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'star' => $this->faker->number(1,2,3,4,5),
            'comment' => $this->faker->paragraph(),
            'site_id' => Site::factory()->create()->id,
            'user_id' => User::factory()->create()->id,
        ];
    }
}
