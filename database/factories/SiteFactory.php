<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sites>
 */
class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $images = [];
        for ($i = 0; $i < rand(1,15); $i++) {
            $images[] = $this->faker->imageUrl();
        }
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'image' => $images,
            'longitude' => $this->faker->longitude(),
            'latitude' => $this->faker->latitude(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
