<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Aventure;

class RecitController extends Controller
{
    public function Aventures()
    {
        return view(
            '/recit',
            [
                "destinations" => Destination::all()
            ]
        );
    }

    public function show_Aventures()
    {
        return view(
            'welcome',
            [
                "aventures" => Aventure::all()
            ]
        );
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'conseils' => 'required',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'destination' => 'required'
        ]);

        $pictures = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $picture) {
                $filename = time() . '_' . $picture->getClientOriginalName();
                $path = $picture->storeAs('public/pictures', $filename);

                $pictures[] = ['photos' => $path];
            }
        }

        $aventure = Aventure::create([
            'description' => $request->input('description'),
            'conseils' => $request->input('conseils'),
            'destination_id' => $request->input("destination"),
            'photos' => json_encode($pictures),
        ]);

        if ($aventure) {
            return back()->with('success', 'Data has been successfully inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }


    public function show()
    {
        $aventures = Aventure::all();
        return view('welcome', ['aventures'=>$aventures]);
    }
}