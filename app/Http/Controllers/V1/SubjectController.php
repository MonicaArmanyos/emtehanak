<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index($student_id)
    {
        $student = Student::findOrFail($student_id);
        $level_id =$student->level->id;
        $student = $student->with(['subjects.levels'=>function($query) use ($level_id){
            $query->where("levels.id",$level_id);
        }])->first();
       dd($student->subjects->last()->levels->first()->pivot->exam_time);
    }
}
