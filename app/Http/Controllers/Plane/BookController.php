<?php

namespace App\Http\Controllers\Plane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\BookHotel;
class BookController extends Controller
{
    public function index()
    {
        return view('hotel.book.index');
    }

    public function create()
    {
        return view('hotel.book.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'rating' => 'required',
        ]);

        $hotel = new Hotel;
        Hotel::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'rating' => $request->rating,
        ]);

        return redirect()->route('hotel.index')->with('success','Hotel created successfully.');
    }
}
