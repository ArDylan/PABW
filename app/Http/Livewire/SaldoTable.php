<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SaldoTable extends LivewireDatatable
{
    public $model = User::class;

    public function query()
    {
        return User::query()->where('name', 'like', '%' . $this->search . '%');
    }

    public function columns()
    {
        return [
            Column::name('name')->label('Nama'),
            Column::name('email')->label('Email'),
            Column::callback('userSaldo.nominal', function ($nominal) {
                return 'Rp ' . number_format($nominal, 0, ',', '.');
            })->label('Total Saldo'),
            Column::callback(['id'], function ($id) {
                if (Auth::user()->role == 'admin') {
                    return view('Admin.saldo.table-action', ['id' => $id]);
                }
                return view('mitra.hotel.table-action', ['id' => $id]);
            }),
        ];
    }
}
