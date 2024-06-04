<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;
use App\Models\suppliments;

class MealPlanController extends Controller
{
    public function meal_index()
    {
        // $suppliments = Meal::all();
        $levels = level::all();
        return view('suppliments.index', compact('levels'));
    }

    public function suppliment_index()
    {
    }


    public function meal_store(Request $request)
    {

        $requestSharehol = json_encode(array_values($request->shareholders));
        $suppliments = suppliments::all();

        foreach ($suppliments as $sup) {
            if ($request->name == $sup->name) {
                return redirect()->back()->with('error', 'Meal plan already exist.');
            }
        }

        // $proxy->shareholder_id = json_encode($request->shareholders);
        // $proxy->save();

        $validator = $request->validate(
            [
                'foodname' => 'required', 'string',
                'foodimage' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'created_by' => 'required|string',
            ]
        );

        // Handle the file upload
        if ($request->hasFile('foodimage')) {
            $file = $request->file('foodimage');
            $path = $file->store('foodimages', 'public'); // Store the file in the public disk's foodimages directory
        } else {
            $path = null;
        }
        $user = Auth::user()->id;
        $suppliments = new suppliments;
        $suppliments->level_id = $request->id;
        $suppliments->suppliment = $request->suppliment;
        $suppliments->foodname = $request->foodname;
        $suppliments->foodimage = $path;
        $suppliments->created_by = $request->created_by;
        $suppliments->save();

        if ($suppliments) {
            return redirect()->back()->with('success', 'Mealplan created successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}
