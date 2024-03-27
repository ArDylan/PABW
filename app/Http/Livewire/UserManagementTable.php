<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserManagementTable extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {
        return [
            Column::name('name')->label('Name'),
            Column::name('email')->label('Email'),
            Column::name('role')->label('Role'),
            Column::name('phone')->label('Phone'),
            Column::callback(['id'], function ($id) {
                return view('admin.user.table-action', ['id' => $id]);
            }),
        ];
    }
}
