<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlightManagementController extends Controller
{
    public function index()
    {
        $dataAirlines = \App\Models\Airline::all();
        return view('admin.flight.index', compact('dataAirlines'));
    }
}
