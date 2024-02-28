<?php

namespace App\Http\Controllers\Plane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function detailTiket()
    {
        return view('home.plane.detail-tiket-plane');
    }
}
