<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Areas;
use App\Models\TrainingCenters;

class CoursesController extends Controller
{
    public function create()
    {
        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();
        return view('Courses.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request)
    {

        Courses::create($request->all());
    }
}
