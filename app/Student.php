<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Level;
use App\Subject;

class Student extends Model
{
    protected $guarded = [];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class)->withTimestamps();;
    }
}
