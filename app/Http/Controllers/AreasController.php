<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    
    public function create()
    {

        return view('Areas.create');
    }

    public function store(Request $request)
    {
        Areas::create($request->all());
    }
}


