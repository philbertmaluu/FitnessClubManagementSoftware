<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\schedule;
use App\Models\User;
use App\Models\level;

use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller{
    public function index()
    {
        return view("trainer.index", compact("schedule"));
    }

    public function create()
{
    $levels = level::whereIn('name', ['beginner', 'amateur', 'pro'])->get();
    return view('schedules.create', compact('levels'));
}

    public function store(Request $request)
    {
       $validator = $request->validate([
         $admin = User::where ('role',3)->get(),
         'level_id' =>'required|exists:level,id',
         'activity_id' =>'required|exists:activity,id',
         'trainer_id'=> 'required|exists:trainer,id',
         'start_time' => 'required|date',
         'end_time' => 'required|date|after:start_time',

         
]);

                $schedule = new schedule;
                $schedule -> level_id= $request->id;
                $schedule-> trainer_id= Auth::user()->id;
                $schedule -> start_time=$request->date;
                $schedule->end_time=$request->due_date;
                $schedule -> activity_id = $request->id;
                $schedule -> description = $request->description;
                $schedule -> location = $request->location;
                $schedule -> save();
                return redirect()->back()->with('success','Schedule successfully created');

            
          
    }

    
}
