<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;
use App\Models\notification;
use App\Models\User;
use App\Models\schedule;
use App\Models\suppliments;
use SebastianBergmann\Type\TrueType;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user()->id;
        $levels = level::where('created_by', $user)->get();
        return view('level.index', compact('levels'));
    }

    public function levelStore(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string'],
                'description' => ['required'],
                'days' => ['required', 'max:60'],
            ]
        );

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }

        //dd($request);

        $user = Auth::user()->id;
        $level = new level;
        $level->name        = $request->name;
        $level->created_by  = $user;
        $level->description = $request->description;
        $level->days        = $request->days;
        $level->save();

        if ($level) {
            return redirect()->back()->with('success', 'Level created successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

       public function createmeal_plan()
       {
           $suppliments = suppliments::all();
           return view('suppliments.index', compact('suppliments'));
       }
    
}