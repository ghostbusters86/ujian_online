<?php

use App\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'name'         => 'Mata Kuliah 1',
                'lecture'      => 'Dosen A'
            ],
            [
                'name'         => 'Mata Kuliah 2',
                'lecture'      => 'Dosen B'
            ],
            [
                'name'         => 'Mata Kuliah 3',
                'lecture'      => 'Dosen C'
            ]
        ];

        foreach ($courses as $course) :
            Course::create($course);
        endforeach;
    }
}
