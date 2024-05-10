<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TrainerController extends Controller
{
    public function index()
    {
        $admins = User::where('role', 3)->get();
        return view('trainer.index', compact('admins'));
    }

    public function store(Request $request)
    {


        //$messege = Notification::;

    }
}