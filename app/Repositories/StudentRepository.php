<?php
/**
 * Created by PhpStorm.
 * User: monica
 * Date: 01/10/19
 * Time: 17:13
 */
namespace App\Repositories;

use App\Repositories\Interfaces\IStudentRepository;
use App\Repositories\AbstractGenericRepository;

class StudentRepository extends AbstractGenericRepository implements IStudentRepository
{
    public function listStudentSubjects($studentId)
    {
        $student = $this->getBy($studentId,"Id");
        $level_id =$student->level->id;
        $student = $this->model::with(['subjects.levels'=>function($query) use ($level_id){
            $query->where("levels.id",$level_id);
        }])->where('id',$student->id)->first();
    
        return $student->subjects;
    }
}