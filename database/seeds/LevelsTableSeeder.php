<?php

use Illuminate\Database\Seeder;
use App\Level;
class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::firstOrCreate(['senior_year'=>'الاول']);
        Level::firstOrCreate(['senior_year'=>'الثاني','specialization'=>'العلمي']);
        Level::firstOrCreate(['senior_year'=>'الثاني','specialization'=>'الادبي']);
        Level::firstOrCreate(['senior_year'=>'الثالث','specialization'=>'العلمي']);
        Level::firstOrCreate(['senior_year'=>'الثالث','specialization'=>'الادبي']);
    }
}
