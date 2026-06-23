<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentices;
use App\Models\Computers;
use App\Models\Courses;


class ApprenticesController extends Controller
{

    public function create()
    {
        $Computers = Computers::all();
        $courses = Courses::all();
        return view('Apprentices.create', compact('Computers', 'courses'));
    }

    public function store(Request $request)
    {

        Apprentices::create($request->all());
    }
}
