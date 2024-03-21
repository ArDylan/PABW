<?php

namespace App\Http\Livewire;

use App\Models\FlightSchedule as ModelsFlightSchedule;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class FlightTable extends LivewireDatatable
{
    public $model = ModelsFlightSchedule::class;

    public function columns()
    {
        return [
            Column::name('flight_number')->label('Flight Number')->filterable(),
            Column::name('flight_date')->label('Flight Date')->filterable(),
            Column::name('departure')->label('Departure Time')->filterable(),
            Column::name('arrival')->label('Arrival Time')->filterable(),
            Column::callback(['from', 'destination'], function ($from, $destination) {
                return "<p>$from - $destination</p>";
            })->label('Location')->unsortable(),
            Column::name('total_seat')->label('Total Seat')->filterable(),
            Column::name('price')->label('Price')->filterable(),
            Column::callback(['id'], function ($id) {
                return view('mitra.flight.table-action', ['id' => $id]);
            }),
        ];
    }
}
