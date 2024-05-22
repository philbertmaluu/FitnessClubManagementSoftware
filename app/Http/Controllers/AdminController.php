<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function trainerPromotion()
    {

        $promotionTrainers = User::where('is_active', 1)->where('role', 3)->get();
        $promotionAdmin = User::where('is_active', 1)->whereIn('role', [1])->get();
        $promotionTrainee = User::where('is_active', 1)->whereIn('role', [2])->get();

        return view('promotion.index', compact('promotionTrainers', 'promotionAdmin', 'promotionTrainee'));
    }
}
