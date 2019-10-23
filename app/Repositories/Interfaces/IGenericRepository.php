<?php
/**
 * Created by PhpStorm.
 * User: monica
 * Date: 01/10/19
 * Time: 17:13
 */
namespace App\Repositories\Interfaces;

interface IGenericRepository
{
    
    /**
     * @param  $value, string $attribute
     * @return Object
     */
    public function getBy($value,string $attribute);
}