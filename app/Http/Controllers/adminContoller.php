<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminContoller extends Controller
{
    public function index()
    {

        //dashboard counts
        $users = User::all()->count();
        $adminCount   = User::where('role', 1)->count();
        $memberCount  = User::where('role', 3)->count();
        $trainerCount = User::where('role', 2)->count();
        $activeUsers  = User::where('role', 3)->where('is_active', 1)->count();






        return view('Dashboard.index', compact('users', 'adminCount', 'memberCount', 'trainerCount', 'activeUsers'));
    }
}
