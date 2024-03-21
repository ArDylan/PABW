<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Airline;
use App\Models\Hotel;
use App\Models\FlightSchedule;
use App\Models\BookHotel;
use App\Models\UserSaldo;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Airline()
    {
        Airline::all();
        return view('home.plane.plane');
    }

    public function hotel()
    {
        return view('home.hotel.hotel');
    }

    public function history()
    {
        $userSaldo = UserSaldo::find(Auth::user()->id);
        $saldoHistories = $userSaldo->userSaldoHistory()->get();
        return view('home.saldo.index', compact('saldoHistories', 'userSaldo'));
    }
}
