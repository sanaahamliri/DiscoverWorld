<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RecitController extends Controller
{
    public function Aventures()
    {
        return view('/recit');
    }

    public function add(Request $request)
{
    $request->validate([
        'description' => 'required',
        'conseils' => 'required',
        'photos' => 'required'
    ]);

    $query = DB::table('aventures')->insert([
        'description' => $request->input('description'),
        'conseils' => $request->input('conseils'),
        'photos' => $request->input('photos'),
        'id_destination' => $request->input('destination'),

    

    ]);

    if($query){
        return back()->with('success' , 'Data have been successfuly inserted');
    }else{
        return back()->with('Fail' , 'Something went wrong');
    }
}

}
