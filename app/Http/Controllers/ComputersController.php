<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computers;

class ComputersController extends Controller
{
    
    public function create()
    {

        return view('Computers.create');
    }

    public function store(Request $request)
    {
        Computers::create($request->all());     
    }
}
