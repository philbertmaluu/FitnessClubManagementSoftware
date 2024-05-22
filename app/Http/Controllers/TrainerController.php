<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;
use App\Models\User;
use App\Models\schedule;

class TrainerController extends Controller
{
    public function index()
    {

        // $user = Auth::user()->id;
        // dd($user);
        $admins = User::where('role', 1)->get();
        return view('trainer.index', compact('admins'));
    }

    public function store(Request $request)
    {



        //$messege = Notification::;

    }



    public function activation_request()
    {

        $inactiveTrainers = Notification::where('is_active', 0)->get();

        return view('trainer.requests', compact('inactiveTrainers'));
    }

    public function schedule_view()
    {
        $schedule = Schedule::all();
        return view('trainer.schedule', compact('schedule'));
    }

    public function createLevel()
    {


        return view('level.index');
    }
}
