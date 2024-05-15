<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Airline;
use App\Models\Hotel;
use App\Models\User;
use App\Models\FlightSchedule;
use App\Models\BookHotel;
use App\Models\UserSaldo;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){

            $flights = FlightSchedule::where('status', 'posted')->get();
            $hotels = Hotel::all();
            $users = User::all();
            return view('home', compact('flights', 'hotels', 'users'));

        } elseif(Auth::user()->role == 'mitra hotel'){
            $flights = null;
            $hotels = Hotel::where('user_id', Auth::user()->id)->get();
            return view('home', compact('flights', 'hotels'));
        
        } elseif(Auth::user()->role == 'mitra airline'){
            $hotels = null;
            $flights = FlightSchedule::where('user_id', Auth::user()->id)->get();
            return view('home', compact('flights', 'hotels'));
        
        } else{
        
            return view('home');
        
        }
    }

    public function Airline()
    {
        $flights = FlightSchedule::where('status', 'posted')->get();
        return view('home.plane.plane', compact('flights'));
    }

    public function hotel()
    {
        $hotels = Hotel::all();
        return view('home.hotel.hotel', compact('hotels'));
    }

    public function history()
    {
        $userSaldo = UserSaldo::find(Auth::user()->id);
        $saldoHistories = $userSaldo->userSaldoHistory()->get();
        return view('home.saldo.index', compact('saldoHistories', 'userSaldo'));
    }
}
