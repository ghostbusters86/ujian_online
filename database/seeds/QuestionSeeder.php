<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'file'      => 'file1.pdf',
                'status'    => 'active',
                'course_id' => 1
            ],
            [
                'file'      => 'file2.pdf',
                'status'    => 'active',
                'course_id' => 2
            ],
            [
                'file'      => 'file3.pdf',
                'status'    => 'active',
                'course_id' => 3
            ]
        ];

        foreach ($questions as $question) :
            Question::create($question);
        endforeach;
    }
}
