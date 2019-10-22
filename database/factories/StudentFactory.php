<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Level;
use App\Student;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Student::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "level_id" => mt_rand (Level::min('id'),Level::max('id')),
        "installation_time" => Carbon::now(),
        "sim_serial_number" =>$faker->unique()->regexify('(89)[A-Za-z0-9]{18}')
    ];
});
