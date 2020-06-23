<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnswerSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
