<?php

namespace Database\Seeders;

use App\Models\course;
use App\Models\image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = course::factory(40)->create();

        foreach ($courses as $course) {
            image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => 'App\Models\course'
            ]);
        }
    }
}
