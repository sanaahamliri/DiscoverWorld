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
                "aventures" => Aventure::all(),
                "destinations" => Destination::all()

            ]
        );
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'conseils' => 'required',
            // 'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'destination' => 'required'
        ]);

      

        $aventure = Aventure::create([
            'description' => $request->input('description'),
            'conseils' => $request->input('conseils'),
            'destination_id' => $request->input("destination"),
        ]);

        if ($aventure) {
            return back()->with('success', 'Data has been successfully inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
        if ($request->hasFile('pictures')) {
            $pictures = [];
        
            foreach ($request->file('pictures') as $picture) {
                // Use the original filename as the second parameter to storeAs
                $path = $picture->storeAs('pictures', $picture->getClientOriginalName(), 'public');
        
                // $path now contains the relative path including the original filename
                $pictures[] = ['picture' => $path];
            }
        
            // Use createMany to insert multiple records
            $aventure->images()->createMany($pictures);
        }
    }
    public function show()
    {
        $aventures = Aventure::all();
        return view('welcome', ['aventures'=>$aventures]);
    }
}