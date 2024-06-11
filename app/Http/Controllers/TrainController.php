<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trainList = Train::where('departure_time', 'like', '2024-06-11%')->get();
        // dd($trainList);
        return view('welcome', compact('trainList'));
    }
}
