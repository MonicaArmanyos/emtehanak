<?php

use Illuminate\Database\Seeder;
use App\Level;
use Carbon\Carbon;

class LevelSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level =Level::find(1);
        $level->subjects()->sync([
            1 => ['exam_time' => (new Carbon('first day of January 2020'))],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            4 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(6)],
            5 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(8)],
            6 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(10)],
            7 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(12)],
            8 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(14)],
            9 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(16)],
            10=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(18)],
            11=> ['exam_time' => (new Carbon('first day of January 2020'))],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(19)],
            13=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(20)],
            16=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(20)],
            17=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(18)],
        ]);

        $level =Level::find(2);
        $level->subjects()->sync([
            1 => ['exam_time' => (new Carbon('first day of January 2020'))],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            4 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            8 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(12)],
            9 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(15)],
            10=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(20)],
            11=> ['exam_time' => (new Carbon('first day of January 2020'))],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            13=> ['exam_time' =>(new Carbon('first day of January 2020'))->addDays(5)],
            14=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(25)],
            16=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            17=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
        ]);


        $level =Level::find(3);
        $level->subjects()->sync([
            1 => ['exam_time' =>(new Carbon('first day of January 2020'))],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            4 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            5 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(11)],
            6 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(14)],
            7 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(17)],
            11=> ['exam_time' =>(new Carbon('first day of January 2020'))],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            13=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(5)],
            14=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(25)],
            15=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(27)],
            16=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            17=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
        ]);


        $level =Level::find(4);
        $level->subjects()->sync([
            1 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(1)],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            8 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            9 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(10)],
            10=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(2)],
            11=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(1)],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            18=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(16)],
            19=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(18)],
        ]);

        $level =Level::find(5);
        $level->subjects()->sync([
            1 => ['exam_time' =>(new Carbon('first day of January 2020'))->addDays(1)],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            4 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(10)],
            8 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            9 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(10)],
            11=> ['exam_time' =>(new Carbon('first day of January 2020'))->addDays(1)],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            14=> ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(2)],
            18=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(16)],
        ]);


        $level =Level::find(6);
        $level->subjects()->sync([
            1 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(1)],
            2 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            3 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(4)],
            5 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(1)],
            6 => ['exam_time' => (new Carbon('first day of January 2020'))->addDays(11)],
            7 => ['exam_time' => (new Carbon('first day of January 2020'))->addWeeks(2)],
            11=> ['exam_time' =>(new Carbon('first day of January 2020'))->addDays(1)],
            12=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(2)],
            15=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(20)],
            18=> ['exam_time' => (new Carbon('first day of January 2020'))->addDays(16)],

        ]);
    }
}
