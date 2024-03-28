<?php

namespace App\Http\Livewire;

use App\Models\FlightSchedule as ModelsFlightSchedule;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class FlightTable extends LivewireDatatable
{
    public $model = ModelsFlightSchedule::class;

    public function columns()
    {
        return [
            Column::name('flight_number')->label('Flight Number'),
            Column::name('flight_date')->label('Flight Date'),
            Column::name('departure')->label('Departure Time'),
            Column::name('arrival')->label('Arrival Time'),
            Column::callback(['from', 'destination'], function ($from, $destination) {
                return "<p>$from - $destination</p>";
            })->label('Location')->unsortable(),
            Column::name('total_seat')->label('Total Seat'),
            Column::name('price')->label('Price'),
            Column::name('status')->label('Status'),
            Column::callback(['id'], function ($id) {
                if (Auth::user()->role == 'admin') {
                    return view('Admin.flight.table-action', ['id' => $id]);
                }
                return view('mitra.flight.table-action', ['id' => $id]);
            }),
        ];
    }
}
