<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\requirement;
use App\Models\course;
use App\Models\description;
use App\Models\goal;
use App\Models\image;
use App\Models\lesson;
use App\Models\section;
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
        $courses = course::factory(10)->create();

        foreach ($courses as $course) {
            image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => 'App\Models\course'
            ]);
            
            Requirement::factory(4)->create([
                'course_id' => $course->id
            ]);

            goal::factory(4)->create([
                'course_id' => $course->id
            ]);

            Audience::factory(4)->create([
                'course_id' => $course->id
            ]);

            $sections = section::factory(4)->create(['course_id' => $course->id]);

            foreach ($sections as $section) {
                $lessons = lesson::factory(4)->create(['section_id' => $section->id]);
            }

            foreach ($lessons as $lesson) {
                description::factory(1)->create(['lesson_id' => $lesson->id]);
            }

        }
    }
}
