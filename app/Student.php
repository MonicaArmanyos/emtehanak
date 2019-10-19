<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Level;

class Student extends Model
{
    protected $guarded = [];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
