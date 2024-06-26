<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\UserSaldo;
use App\Models\UserSaldoHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SaldoController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.saldo.index', compact('users'));
    }

    public function history(UserSaldo $userSaldoId)
    {
        if (Auth::user()->role != 'admin' && Auth::user()->id != $userSaldoId->id){
            return abort(404);
        }
        return view('admin.saldo.history', compact('userSaldoId'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nominal' => 'required|numeric',
        ]);

        $saldo = UserSaldo::where('user_id', $request->user_id)->first();


        $saldoHistory = UserSaldoHistory::create([
            'user_id' => $request->user_id,
            'user_saldo_id' => $saldo->id,
            'time' => Carbon::now(),
            'description' => 'Saldo berhasil ditambahkan sebesar Rp ' . number_format($request->nominal, 0, ',', '.'),
        ]);
        $saldo->update([
            'nominal' => $saldo->nominal + $request->nominal
        ]);



        return redirect()->route('admin.saldo');
    }

    public function kurangi(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nominal' => 'required|numeric',
        ]);

        $saldo = UserSaldo::where('user_id', $request->user_id)->first();


        $saldoHistory = UserSaldoHistory::create([
            'user_id' => $request->user_id,
            'user_saldo_id' => $saldo->id,
            'time' => Carbon::now(),
            'description' => 'Saldo berhasil mengurangi saldo sebesar Rp ' . number_format($request->nominal, 0, ',', '.'),
        ]);
        $saldo->update([
            'nominal' => $saldo->nominal - $request->nominal
        ]);



        return redirect()->route('admin.saldo');
    }

}
