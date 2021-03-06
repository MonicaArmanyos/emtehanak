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
        $this->call(LevelsTableSeeder::class);
        // $this->call(StudentsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(LevelSubjectsTableSeeder::class);
        $this->call(StudentSubjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
