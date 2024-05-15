<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;
use App\Models\User;

class TrainerController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 1)->get();
        return view('trainer.index', compact('admins'));
    }

    public function store(Request $request)
    {


        //$messege = Notification::;

    }

    public function activation_request()
    {
        //$inactiveTrainers = User::where('role', 3)->get();
        $inactiveTrainers = Notification::all();

        dd();
        return view('trainer.requests');
    }
}
