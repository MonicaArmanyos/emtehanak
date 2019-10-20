<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Level;

class Subject extends Model
{
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class)->withPivot("exam_time")->withTimestamps();
    }
}
