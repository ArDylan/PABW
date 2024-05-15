<?php

namespace App\Http\Controllers\Plane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlightSchedule;
use App\Models\BookTiket;
use App\Models\BookTiketStatus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        // sugesstion tiket
        $suggestion = FlightSchedule::where('from', $flight->from)->where('status', 'posted')->where('id', '!=', $flight->id)->get();

        return view('home.plane.detail-tiket-plane', compact('flight', 'time_diff', 'booked', 'suggestion'));
    }

    public function orderTicket(Request $request, FlightSchedule $flight)
    {
        $user = Auth::user()->load('userSaldo');

        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required',
        ]);

        $bookedSeats = BookTiket::where('flight_schedule_id', $flight->id)->pluck('seat_number')->toArray();
        $availableSeats = range(1, $flight->total_seat);
        $availableSeats = array_diff($availableSeats, $bookedSeats);
        $randomSeat = array_rand($availableSeats);
        $seatNumber = $availableSeats[$randomSeat];

        if ($user->userSaldo->nominal < $flight->price) {
            return back()->with('error', 'Saldo anda tidak cukup');
        }

        if ($flight->total_seat == count($bookedSeats)) {
            return back()->with('error', 'Tiket sudah habis');
        }

        DB::transaction(function () use ($user, $flight, $seatNumber){
            $book = BookTiket::create([
                'flight_schedule_id' => $flight->id,
                'user_id' => auth()->user()->id,
                'order_date' => date('Y-m-d H:i:s'),
                'total_price' => $flight->price,
                'seat_number' => $seatNumber,
                'status' => 'booked',
            ]);

            // book_tiket_statuses
            BookTiketStatus::create([
                'book_tiket_id' => $book->id,
                'status' => 'booked',
                'description' => 'Pemesanan tiket pesawat ' . $flight->from . ' - ' . $flight->to . ' ' . $flight->departure,
            ]);

            $user->userSaldoHistory()->create([
                'time' => Carbon::now(),
                'description' => 'Pembelian tiket pesawat sebesar Rp ' . number_format($flight->price, 0, ',', '.'),
                'user_saldo_id' => $user->userSaldo->id,
                'user_id' => $user->id,
            ]);

            $user->userSaldo->update([
                'nominal' => $user->userSaldo->nominal - $flight->price
            ]);


        });
        return redirect()->route('history.ticket');

    }

    public function historyTicket(Request $request)
    {
        $booked = BookTiket::where('user_id', auth()->user()->id)->get();
        return view('home.plane.history-tiket', compact('booked'));
    }
}
