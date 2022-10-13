<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'url' => 'cursos/'. $this->faker->image('public/storage/cursos', 640, 480, null, false)
            'url' => 'cursos/' . $this->faker->image('public/storage/cursos', 640, 480, null, false)
        ];
    }
}
