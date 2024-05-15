<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\FlightSchedule;
use Illuminate\Http\Request;

class FlightManagementController extends Controller
{
    public function index()
    {
        $dataAirlines = Airline::all();
        return view('admin.flight.index', compact('dataAirlines'));
    }

    public function approve(Request $request)
    {
        FlightSchedule::whereId($request->id)->update(['status' => 'posted']);

        return redirect()->back();
    }

    public function edit(FlightSchedule $flightSchedule)
    {
        $airlines = Airline::all();
        return view('admin.flight.edit', compact('flightSchedule', 'airlines'));
    }

    public function update(Request $request, FlightSchedule $flightSchedule)
    {
        $flightSchedule->update([
            'airline_id' => $request->airline_id,
            'flight_number' => $request->flight_number,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
            'price' => $request->price,
            'from' => $request->from,
            'destination' => $request->destination,
            'transit' => $request->transit,
        ]);

        return redirect()->route('admin.management.flight.index');
    }

    public function delete(FlightSchedule $flightSchedule)
    {
        $flightSchedule->delete();

        return redirect()->back();
    }

}
