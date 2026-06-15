<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenters;

class TrainingCentersController extends Controller
{

    public function create()
    {

        return view('TrainingCenters.create');
    }

    public function store(Request $request)
    {

        $trainingCenter = new TrainingCenters();

        $trainingCenter->name = $request->name;
        $trainingCenter->location = $request->location;

        $trainingCenter->save();

        return $trainingCenter;
    }
}
