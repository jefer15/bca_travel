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
            'star' => $this->faker->numberBetween([0,5]),
            'comment' => $this->faker->paragraph(),
            'site_id' => Site::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
