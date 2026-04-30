<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    public function Area()
    {
        return $this->belongsTo("App\Models\Areas");
    }

    public function trainnigCenter()
    {
        return $this->belongsTo("App\Models\Trainnig_Centers");
    }

    public function Courses()
    {
        return $this->belongsToMany("App\Models\Courses");
    }
}
