<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function Area()
    {
        return $this->belongsTo('App\Models\Areas');
    }

    public function Teachers()
    {
        return $this->belongsToMany('App\Models\Teachers');
    }

    public function Apprentices()
    {
        return $this->belongsToMany('App\Models\Apprentices');
    }

    public function Training_Center()
    {
        return $this->belongsTo('App\Models\Training_Centers');
    }
}
