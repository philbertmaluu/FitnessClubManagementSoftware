<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\notification;
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
use Illuminate\Http\Request;
use App\Models\User;

class TrainerController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        // $user = Auth::user()->id;
        // dd($user);
        $admins = User::where('role', 1)->get();
        return view('trainer.index', compact('admins'));

=======
        $admins = User::where('role', 1)->get();
        return view('trainer.index', compact('admins'));
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
    }

    public function store(Request $request)
    {

<<<<<<< HEAD
       
        //$messege = Notification::;

    }
}
=======

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
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
