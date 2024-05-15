<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Models\BookHotel;
use App\Models\BookHotelStatus;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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



    public function show(Hotel $hotel)
    {
        $availableRooms = $hotel->rooms()->where('status', 'available')->get();

        // $availableRooms = $hotel->rooms()->whereHas('bookHotel', function($query) {
        //     return $query->whereDate('order_date', now())->where('status', "!=", 'booked');
        // })->get();
        return view('home.hotel.detail-hotel', compact('hotel', 'availableRooms'));
    }

    public function book(Request $request, Hotel $hotel)
    {

        $user = Auth::user()->load('userSaldo');

        $request->validate([
            'room_id' => 'required',
            'order_date' => 'required',
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
            'order_date' => 'required',
        ]);

        if ($user->userSaldo->nominal < $hotel->rooms()->where('id', $request->room_id)->first()->price) {
            return back()->with('error', 'Saldo anda tidak cukup');
        }
        $room = $hotel->rooms()->where('id', $request->room_id)->first();

        DB::transaction(function () use ($user, $room, $request) {
            $room->update([
                'status' => 'booked'
            ]);

            BookHotel::create([
                'hotel_id' => $room->hotel_id,
                'room_id' => $room->id,
                'user_id' => $user->id,
                'order_date' => $request->order_date,
                'status' => 'booked'
            ]);

            BookHotelStatus::create([
                'status' => 'booked',
                'book_hotel_id' => $room->bookHotel->id,
                'description' => 'Pemesanan kamar ' . $room->name . ' ' . $room->hotel->name . ' ' . $request->order_date,
                'time' => now()
            ]);

            $user->userSaldo()->update([
                'nominal' => $user->userSaldo->nominal - $room->price
            ]);

            $user->userSaldoHistory()->create([
                'description' => 'Pembayaran booking hotel ' . $room->hotel->name . ' ' . $room->name . ' ' . $request->order_date . ' ' . $room->price,
                'time' => now(),
                'user_saldo_id' => $user->userSaldo->id,
                'user_id' => $user->id,
            ]);
        });

        return back();
    }

    public function history()
    {
        $booked = BookHotel::where('user_id', Auth::id())->get();
        return view('home.hotel.history-hotel', compact('booked'));
    }
}
