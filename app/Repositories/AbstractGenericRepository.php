<?php
/**
 * Created by PhpStorm.
 * User: monica
 * Date: 01/10/19
 * Time: 18:20
 */

namespace App\Repositories;

use App\Repositories\Interfaces\IGenericRepository;

abstract class AbstractGenericRepository implements IGenericRepository
{
    protected $model;

    /**
     * AbstractGenericRepository constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @param  $$value, string $attribute
     * @return Object
     */
    public function getBy($value,string $attribute)
    {
        return $this->model::where($attribute, $value)->firstOrFail();
    }
}
