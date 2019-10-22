<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();
        foreach ($students as $student)
        {
            $student->subjects()->sync($student->level->subjects);
        }
    }
}
