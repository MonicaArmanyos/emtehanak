<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Level extends Model
{
    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);      
    }
}
