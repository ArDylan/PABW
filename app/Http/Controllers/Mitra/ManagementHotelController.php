<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Facility;
use App\Models\RoomFacility;
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
        $facilities = Facility::all();
        return view('mitra.hotel.manage-room', compact('hotel', 'facilities'));
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
        $room = Room::find($id);
        return view('mitra.hotel.edit-room', compact('room'));
    }

    public function detail($id) {
        $hotel = Hotel::with('rooms')->find($id);
        $rooms = Room::where('hotel_id', $id)->get();
        $facilities = Facility::all();

        return view('mitra.hotel.detail', compact('hotel', 'rooms', 'facilities'));
    }

    public function addRooms($id, Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'room_number' => 'required',
            'facilities' => 'required',
        ]);

        $hotel = Hotel::find($id);

        $room = Room::create([
            'name' => $request->name,
            'price' => $request->price,
            'room_number' => $request->room_number,
            'hotel_id' => $hotel->id,
        ]);

        foreach($request->facilities as $facility){
            RoomFacility::create([
                'room_id' => $room->id,
                'facility_id' => $facility,
            ]);
        }
        

        return back();
    }

    public function updateStatusRooms($id, Request $request) {
        $room = Room::find($id);
        if($room->status == 'booked'){
            $room->bookHotel->where('status', 'booked')->first()->update(['check_in' => date('Y-m-d')]);
            $room->status = 'used';
        } elseif($room->status == 'used'){
            $room->bookHotel->where('status', 'booked')->first()->update(['status' => 'checkout', 'check_out' => date('Y-m-d')]);
            $room->status = 'available';
        } elseif($room->status == 'available'){
            $room->status = 'maintenance';
        } elseif($room->status == 'maintenance'){
            $room->status = 'available';
        }
        $room->save();
        return back();
    }
}
