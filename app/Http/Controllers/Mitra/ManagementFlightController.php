<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\FlightSchedule;
use Illuminate\Http\Request;

class ManagementFlightController extends Controller
{
    public function index()
    {
        $dataAirlines = \App\Models\Airline::all();
        return view('mitra.flight.index', compact('dataAirlines'));
    }

    public function store(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'airline_id' => 'required',
        //     'flight_number' => 'required',
        //     'price' => 'required',
        //     'total_seat' => 'required',
        //     'flight_date' => 'required',
        //     'departure' => 'required',
        //     'arrival' => 'required',
        //     'from' => 'required',
        //     'destination' => 'required',
        //     'transit' => 'required',
        // ]);

        $flight = FlightSchedule::create([
            'user_id' => $request->user()->id,
            'airline_id' => $request->airline_id,
            'flight_number' => $request->flight_number,
            'price' => $request->price,
            'total_seat' => $request->total_seat,
            'flight_date' => $request->flight_date,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
            'from' => $request->from,
            'destination' => $request->destination,
            'transit' => $request->transit,
        ]);

        return back();
    }
}
