<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;
use App\Models\level;

class TraineeController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        $levels = level::all();
        return view('trainee.index', compact('plans', 'levels'));
    }

    public function schedule()
    {

        return view('trainee.schedule');
    }

    public function trainingschedule()
    {
        return view('trainee.schedule');
    }
}
