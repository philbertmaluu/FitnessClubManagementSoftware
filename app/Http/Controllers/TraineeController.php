<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\plan;
use Illuminate\Support\Facades\DB;

class TraineeController extends Controller
{
    public function index()
    {

        return back();
        $plans = Plan::all();
        return view('trainee.index', compact('plans'));

    }

    public function schedule()
    {

        return view('trainee.schedule');
    }

}

}

