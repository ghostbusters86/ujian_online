<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        $answers = [
            [
                'file'      => 'file3.pdf',
                'upload_at' => time(),
                'user_id'   => 1,
                'question_id' => 1
            ],
            [
                'file'      => 'file4.pdf',
                'upload_at' => time(),
                'user_id'   => 2,
                'question_id' => 2
            ],
            [
                'file'      => 'file5.pdf',
                'upload_at' => time(),
                'user_id'   => 3,
                'question_id' => 3
            ]
        ];

        foreach ($answers as $answer) :
            Answer::create($answer);
        endforeach;
    }
}
