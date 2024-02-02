<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Destination;

class RecitController extends Controller
{
    public function Aventures()
    {
        return view(
            '/recit',
            [
                "destinations" => destination::all()
            ]
        );
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'conseils' => 'required',
            'photos' => 'required',
            'destination' => 'required' // Add validation for the 'destination' field if necessary
        ]);

        $query = DB::table('aventures')->insert([
            'description' => $request->input('description'),
            'conseils' => $request->input('conseils'),
            'photos' => $request->input('photos'),
            'destination_id' => $request->input("destination"),
        ]);

        if ($query) {
            return back()->with('success', 'Data have been successfully inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
