<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainernotifications;


class TrainernotificationsController extends Controller
{
    public function index()
    {
        
     return view("trainer.index");
    }

    public function store(Request $request)
    {
        $this->$request->validate([
            "username"=> "required",
            "admin"=> "required",
            "is_active"=> "required/boolean",
            "prototype"=> "required",
        ]);
        $newTrainernotifications = TrainerNotifications::create();
         return redirect(route("trainer.index"));
            

        
        }
}
