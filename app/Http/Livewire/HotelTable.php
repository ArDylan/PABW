<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class HotelTable extends LivewireDatatable
{
    public $model = Hotel::class;

    public function columns()
    {
        return [
            Column::name('name')->label('Nama'),
            Column::name('city')->label('Kota'),
            Column::name('address')->label('Alamat'),
            Column::name('rating')->label('Rating'),
            Column::callback(['id'], function ($id) {
                if (Auth::user()->role == 'admin') {
                    return view('Admin.flight.table-action', ['id' => $id]);
                }
                return view('mitra.flight.table-action', ['id' => $id]);
            }),
        ];
    }
}
