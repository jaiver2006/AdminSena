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

        $area = new Areas();

        $area->name = $request->name;

        $area->save();

        return $area;
    }
}
