<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

use App\Models\Saldo;
use App\Models\User;

class SaldoController extends Controller
{
    public function index()
    {
        return view('admin.saldo.index');
    }

    public function tableSaldo(){
        if(request()->ajax()) {
            $query = Saldo::with('user');
            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="' . route('admin.saldo.edit', $item->id) . '" class="btn btn-primary">Edit</a>
                        <form class="d-inline" action="' . route('admin.saldo.destroy', $item->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    ';
                })
                ->editColumn('saldo', function($item) {
                    return number_format($item->saldo);
                })
                ->editColumn('created_at', function($item) {
                    return $item->created_at->format('Y-m-d');
                })
                ->rawColumns(['action'])
                ->make();
        }
    }
}
