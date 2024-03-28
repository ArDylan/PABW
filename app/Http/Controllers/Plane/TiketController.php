<?php

namespace App\Http\Controllers\Plane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\BookTiket;
use Carbon\Carbon;
class TiketController extends Controller
{
    

    public function detailTiket(FlightSchedule $flight)
    {
        $startDate = Carbon::parse($flight->departure);
        $endDate = Carbon::parse($flight->arrival);
        
        $diffInHours = $startDate->diffInHours($endDate); // Selisih dalam jam
        $diffInMinutes = $startDate->diffInMinutes($endDate); // Selisih dalam menit
        
        $diffInHoursWithoutMinutes = $diffInHours * 60; // Konversi selisih jam ke menit
        $remainingMinutes = $diffInMinutes - $diffInHoursWithoutMinutes; // Hitung sisa menit
        
        $time_diff = $diffInHours . ' jam ' . $remainingMinutes . ' menit';
        
        $booked = BookTiket::where('flight_schedule_id', $flight->id)->get();
        return view('home.plane.detail-tiket-plane', compact('flight', 'time_diff', 'booked'));
    }

    public function orderTicket(Request $request, FlightSchedule $flight)
    {
        $book = BookTiket::create([
            'flight_schedule_id' => $flight->id,
            'user_id' => auth()->user()->id,
            'order_date' => date('Y-m-d H:i:s'),
            'total_price' => $flight->price,
            'status' => 'pending',
        ]);
        return redirect()->route('home.plane');
    }
}
