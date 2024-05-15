<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\plan;
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8

class TraineeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return back();
=======
        $plans = Plan::all();
        return view('trainee.index', compact('plans'));
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
    }

    public function schedule()
    {

        return view('trainee.schedule');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
