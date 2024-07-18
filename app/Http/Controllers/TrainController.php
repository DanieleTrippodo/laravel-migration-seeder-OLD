<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = now()->format('Y-m-d');
        $trains = Train::whereDate('departure_time', $today)
                        ->where('cancelled', false)
                        ->get();

        return view('trains.index', compact('trains'));
    }
}
