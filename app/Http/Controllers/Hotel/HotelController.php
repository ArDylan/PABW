<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return view('admin.hotel.index');
    } 

    public function create()
    {
        return view('admin.hotel.create');
    }

    public function store(Request $request)
    {
        return asd;
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        Hotel::create([
            'user_id' => 1,
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'rating' => 0,
        ]);

        return redirect()->route('hotel.index')->with('success','Hotel created successfully.');
    }

    public function show(Hotel $hotel)
    {
        return view('hotel.show',compact('hotel'));
    }

    public function update( Hotel $hotel, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'rating' => 'required',
        ]);

        $hotel->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'rating' => $request->rating,
        ]);

        return redirect()->route('hotel.index')->with('success','Hotel updated successfully');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotel.index')->with('success','Hotel deleted successfully');
    }

}
