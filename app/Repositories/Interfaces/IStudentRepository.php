<?php
/**
 * Created by PhpStorm.
 * User: monica
 * Date: 01/10/19
 * Time: 17:13
 */
namespace App\Repositories\Interfaces;
use App\Repositories\Interfaces\IGenericRepository;

interface IStudentRepository extends IGenericRepository
{
    public function listStudentSubjects($studentId);
}