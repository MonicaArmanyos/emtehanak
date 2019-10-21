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
    /**
     * @param string $phone , string $attribute
     * @return Object
     */
    public function getBy(string $phone,string $attribute="phone")
    {
        return $this->model::where($attribute, $phone)->firstOrFail();
    }
}