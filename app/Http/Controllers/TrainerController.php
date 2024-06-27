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
use App\Models\food;
use Monolog\Level as MonologLevel;

class TrainerController extends Controller
{
    // public function request()
    // {

    //     // $user = Auth::user()->id;
    //     // dd($user);
    //     return view('trainer.Activation', compact('admins', 'levels'));
    // }

    public function store(Request $request)
    {
        //$messege = Notification::;

    }

    public function index()

    {
        $levels = Level::all();
        $admins = User::where('role', 1)->get();

    //    $user = Auth::user()->is_active == 1;
    return view ('trainer.index', compact('admins', 'levels'));
    }



    // public function Activation()
    // {

    //     $inactiveTrainers = Notification::where('is_active', 0)->get();

    //     return view('trainer.requests', compact('inactiveTrainers'));
    // }


    public function mealplanning()
    {
        $mealplans = food::all();
        return view('trainer.meal', compact('mealplans'));
    }



    public function foodstore(Request $request)
    {
        //dd($request);

        $validated = $request->validate([
            'name' => 'required',
            'calories' => 'required',
        ]);

        if (!$validated) {
            return redirect()->back()->with('error', 'Something is not ok with form validation.');
        }

        $mealplan =  new food;
        $mealplan->name = $request->name;
        $mealplan->calories = $request->calories;
        $mealplan->carbohydrate = $request->has('carbohydrate');
        $mealplan->protein = $request->has('protein');
        $mealplan->fats = $request->has('fats');
        $mealplan->vitamins = $request->has('vitamins');
        $mealplan->dairyproducts = $request->has('dairyproducts');
        $mealplan->fruits = $request->has('fruits');
        $mealplan->water = $request->has('water');
        $mealplan->created_by = Auth::user()->id;
        $mealplan->save();

        if ($mealplan) {
            return redirect()->back()->with('success', 'Food created successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    // public function destroy($id)
    // {
    //     $mealPlan = food::findOrFail($id);

    //     // Delete the meal plan
    //     $mealPlan->delete->id();

    //     return redirect()->back()->with('success', 'Meal Plan deleted successfully.');
    // }

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

    public function trainer_messeges()
    {
        return view('trainer.notifications.messeges');
    }
}