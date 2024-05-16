<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserManagementTable extends LivewireDatatable
{
    public $model = User::class;
    public $mitra;
    public $beforeTableSlot = "components.filter-mitra";

    public function builder()
    {
        $query = User::query();

        if($this->mitra == 'all'){
            $query;
        }else if ($this->mitra == 'all mitra') {
            $query->whereIn('role', ['mitra hotel', 'mitra airline']);
        }else if($this->mitra){
            $query->where('role', $this->mitra);
        }

        return $query;
    }

    public function columns()
    {
        return [
            Column::name('name')->label('Name')->searchable(),
            Column::name('email')->label('Email'),
            Column::name('role')->label('Role'),
            Column::callback('is_suspend', function ($is_suspend) {
                return $is_suspend ? '<label class="text-red-500">Suspend</label>' : '<label class="text-green-500">Active</label>';
            })->label('Status'),
            Column::name('phone')->label('Phone'),
            Column::callback(['id'], function ($id) {
                return view('admin.user.table-action', ['id' => $id]);
            }),
        ];
    }
}
