<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Centers extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->hasMany("App\Models\Teachers");
    }

    public function Courses()
    {
        return $this->hasMany("App\Models\Courses");
    }
}
