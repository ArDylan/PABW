<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementHotelController extends Controller
{
    public function index()
    {
        return view('mitra.hotel.index');
    }
}
