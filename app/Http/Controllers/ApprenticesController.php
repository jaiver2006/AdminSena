<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentices;

class ApprenticesController extends Controller
{

    public function create()
    {

        return view('Apprentices.store');
    }

    public function store(Request $request)
    {

        $apprentice = new Apprentices();

        $apprentice->name = $request->name;

        $apprentice->save();

        return $apprentice;
    }
}
