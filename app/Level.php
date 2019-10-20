<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Subject;

class Level extends Model
{
    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);      
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withPivot("exam_time")->withTimestamps();
    }
}
