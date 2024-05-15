<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserSaldoHistory;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class HistorySaldoTable extends LivewireDatatable
{
    public $model = UserSaldoHistory::class;
    public $userSaldoId;

    public function builder()
    {
        return UserSaldoHistory::query()->where('user_saldo_id', $this->userSaldoId);
    }

    public function columns()
    {

        return [
            Column::name('user.name')->label('User'),
            Column::callback(['time', 'created_at'], function($hour){
                return date('h:s', strtotime($hour));
            })->label('Jam'),
            Column::callback('time', function($time){
                return date('d-m-Y', strtotime($time));
            })->label('Tanggal'),
            Column::name('description')->label('Dekripsi'),
            // Column::callback('userSaldo.nominal', function ($nominal) {
            //     return 'Rp ' . number_format($nominal, 0, ',', '.');
            // })->label('Total Saldo'),
        ];
    }
}
