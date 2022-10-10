<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\course;
use App\Models\level;
use App\Models\price;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([course::BORRADOR, course::REVISION, course::PUBLICADO]),
            'slug' => Str::slug($title),
            'user_id' => User::all()->random()->id,
            'level_id' => level::all()->random()->id,
            'category_id' => category::all()->random()->id,
            'price_id' => price::all()->random()->id,
        ];
    }
}
