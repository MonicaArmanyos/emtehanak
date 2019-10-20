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
        $subjects = $student->subjects;
    }
}
