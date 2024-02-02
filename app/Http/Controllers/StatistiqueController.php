<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StatistiqueController extends Controller
{
    public function statistique()
    {
        return view('statistique');
    }
}
