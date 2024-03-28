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
}
