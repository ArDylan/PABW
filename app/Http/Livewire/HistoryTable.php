<?php

namespace App\Http\Livewire;

use App\Models\BookTiket as ModelsBookTiket;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use Livewire\Component;

class HistoryTable extends LivewireDatatable
{
    public $model = ModelsBookTiket::class;

    public function columns()
    {
        return [
            Column::name('order_date')->label('Tanggal Order'),
            Column::name('seat_number')->label('Nomor Kursi'),
            Column::name('total_price')->label('Harga Total'),
            Column::name('status')->label('Status'),
        ];
    }

    public function query()
    {
        return ModelsBookTiket::query()->where('user_id', Auth::id());
    }
}
