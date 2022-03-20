<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    public function show()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
