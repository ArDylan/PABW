<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class ManagementHotelController extends Controller
{
    public function index()
    {
        return view('mitra.hotel.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        Hotel::create([
            'name' => $request->name,
            'city' => $request->city,
            'address' => $request->address,
            'rating' => "0",
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('mitra.hotel.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        $hotel = Hotel::find($id);
        $hotel->update([
            'name' => $request->name,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        return redirect()->route('mitra.hotel.index');
    }

    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return back();
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);
        return view('mitra.hotel.show', compact('hotel'));
    }

    public function manageRoom($id)
    {
        $hotel = Hotel::find($id);
        return view('mitra.hotel.manage-room', compact('hotel'));
    }

    public function storeRoom(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'total_room' => 'required',
        ]);

        $hotel = Hotel::find($id);
        $hotel->rooms()->create([
            'name' => $request->name,
            'price' => $request->price,
            'total_room' => $request->total_room,
        ]);

        return back();
    }

    public function editRoom($id)
    {
        $room = \App\Models\Room::find($id);
        return view('mitra.hotel.edit-room', compact('room'));
    }
}
