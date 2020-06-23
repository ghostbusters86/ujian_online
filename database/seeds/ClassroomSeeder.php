<?php

use App\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        $classrooms = [
            [
                'name'         => 'Kelas A'
            ],
            [
                'name'         => 'Kelas B'
            ],
            [
                'name'         => 'Kelas C'
            ]
        ];

        foreach ($classrooms as $classroom) :
            Classroom::create($classroom);
        endforeach;
    }
}
