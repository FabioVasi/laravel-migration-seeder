<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $fleet_trains = Train::all();

        return view('welcome', compact('fleet_trains'));
    }

    public function daily()
    {
        $daily_trains = Train::whereDay('departure_time', '=', date('d'))->get();

        return view('daily', compact('daily_trains'));
    }
}
