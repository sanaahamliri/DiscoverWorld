<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Destination;

class DestinationController extends Controller
{

    public function destinations()
    {
        $destinations = destination::all();
        return view('welcome', ['destinations'=>$destinations]);
    }
}
