<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;

class TraineeController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('trainee.index', compact('plans'));
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
