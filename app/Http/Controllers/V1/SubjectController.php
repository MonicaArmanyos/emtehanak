<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubjectCollection;
use App\Repositories\Interfaces\ISubjectRepository;
use App\Repositories\Interfaces\IStudentRepository;


class SubjectController extends Controller
{
    public function index($studentId,IStudentRepository $studentRepository)
    {
      return new SubjectCollection($studentRepository->listStudentSubjects($studentId));
    }
}
