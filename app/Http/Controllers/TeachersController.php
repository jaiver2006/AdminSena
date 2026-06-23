<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Areas;
use App\Models\TrainingCenters;

class TeachersController extends Controller
{
    public function create()
    {

        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();
        return view('Teachers.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request)
    {

        Teachers::create($request->all());
    }
}
