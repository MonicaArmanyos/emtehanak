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
    /**
     * @param string $phone, string $attribute
     * @return Object
     */
    public function getBy(string $phone,string $attribute="phone");
}