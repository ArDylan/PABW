<?php

namespace App\Http\Livewire;

use App\Models\BookHotel;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class HistoryHotelTable extends LivewireDatatable
{
    public $model = BookHotel::class;

    public function columns()
    {
        return [
            // hotel name
            Column::callback('hotel_id', function ($hotel_id) {
                $hotel = Hotel::find($hotel_id);
                return $hotel->name;
            })->label('Hotel'),
            // romm name
            Column::callback('room_id', function ($room_id) {
                $room = Room::find($room_id);
                return $room->name . ', Rp. ' . $room->price;
            })->label('Room'),
            Column::name('order_date')->label('Tanggal Order'),
            Column::name('check_in')->label('Check In'),
            Column::name('check_out')->label('Check Out'),
            Column::name('status')->label('Status'),
        ];
    }

    public function query()
    {
        return BookHotel::query()->where('user_id', Auth::id())->with('room', 'hotel');
    }
}
