<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function plane()
    {
        return view('home.plane.plane');
    }

    public function hotel()
    {
        return view('home.hotel.hotel');
    }
}
