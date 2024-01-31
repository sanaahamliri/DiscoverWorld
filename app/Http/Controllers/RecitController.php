<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecitController extends Controller
{
    public function Aventures()
    {
        return view('recit');
    }

    public function add(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'conseils' => 'required',
            'photos' => 'required'
        ]);
    }
}
