<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::firstOrCreate(["name"=>"اللغة العربية"]);
        Subject::firstOrCreate(["name"=>"اللغة الأجنبية الأولى"]);
        Subject::firstOrCreate(["name"=>"االغة الأجنبية الثانية"]);
        Subject::firstOrCreate(["name"=>"الرياضيات"]);
        Subject::firstOrCreate(["name"=>"التاريخ"]);
        Subject::firstOrCreate(["name"=>"الجغرافيا"]);
        Subject::firstOrCreate(["name"=>"الفلسفة"]);
        Subject::firstOrCreate(["name"=>"الفيزياء"]);
        Subject::firstOrCreate(["name"=>"الكيمياء"]);
        Subject::firstOrCreate(["name"=>"الأحياء"]);
        Subject::firstOrCreate(["name"=>"التربية الدينية"]);
        Subject::firstOrCreate(["name"=>"التربية الوطنية"]);
        Subject::firstOrCreate(["name"=>"الكمبيوتر وتكنولوجيا المعلومات والاتصالات"]);
        Subject::firstOrCreate(["name"=>"الميكانيكا"]);
        Subject::firstOrCreate(["name"=>"علم النفس"]);
        Subject::firstOrCreate(["name"=>"التربية المهنية"]);
        Subject::firstOrCreate(["name"=>" الأنشطة التربوية"]);
        Subject::firstOrCreate(["name"=>"الاقتصاد و الاحصاء"]);
    }
}
