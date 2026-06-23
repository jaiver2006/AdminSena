<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentices extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cell_number'
    ];

    public function Courses()
    {
        return $this->belongsToMany('App\Models\Courses');
    }

    public function Computer()
    {
        return $this->belongsTo('App\Models\Computers');
    }
}
