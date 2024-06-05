<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\level;
use App\Models\suppliments;
use App\Models\food;
use Illuminate\Support\Facades\Auth;

class MealPlanController extends Controller
{

    public function meal_index()
    {
        // $suppliments = Meal::all();
        $levels = level::all();
        $foods  = food::all();
        $mealplans = suppliments::all();

        return view('suppliments.index', compact('levels', 'foods', 'mealplans'));
    }

    public function suppliment_index()
    {
    }


    public function meal_store(Request $request)
    {
        //dd($request);
        //dd($request->all(), $request->file('mealimage'), $request->hasFile('mealimage'));
        $validator = \Validator::make(
            $request->all(),
            [
                'name' => 'required|string',
                'food_ids' => 'required|array',
                // 'mealimage' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'mealimage' => 'required'
            ]
        );

        if ($validator->fails()) {
            $messages = $validator->getMessageBag();
            return redirect()->back()->with('error', $messages->first());
        }

        // Encode the food IDs array to JSON
        $food_ids = json_encode($request->food_ids);

        // Check if a supplement with the same name already exists
        $existingSuppliment = Suppliments::where('suppliment', $request->name)->first();
        if ($existingSuppliment) {
            return redirect()->back()->with('error', 'Meal plan already exists.');
        }

        $suppliments = new Suppliments();
        $suppliments->level_id = $request->level;
        $suppliments->suppliment = $request->name;
        $suppliments->duration = $request->duration;
        $suppliments->quality = $request->quality;
        $suppliments->food_ids = $food_ids;
        $suppliments->days = $request->days;
        $suppliments->meals = $request->meals;
        $suppliments->created_by = Auth::user()->id;

        // dd($request->hasFile('mealimage'));

        if ($request->hasFile('mealimage')) {
            $imagePath = $request->file('mealimage')->store('public/images');
            $suppliments->foodimage = $imagePath;
        }

        // Save the supplement data
        $suppliments->save();

        // Check if the supplement was saved successfully
        if ($suppliments) {
            return redirect()->back()->with('success', 'Meal plan created successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }



    public function editprofile(Request $request)
    {
        $userDetail = \Auth::user();
        $user       = User::findOrFail($userDetail['id']);
        $this->validate(
            $request,
            [
                'name' => 'required|max:120',
                'email' => 'required|email|unique:users,email,' . $userDetail['id'],
            ]
        );
        if ($request->hasFile('profile')) {
            $filenameWithExt = $request->file('profile')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('profile')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $settings = Utility::getStorageSetting();
            if ($settings['storage_setting'] == 'local') {
                $dir        = 'uploads/avatar/';
            } else {
                $dir        = 'uploads/avatar';
            }

            $image_path = $dir . $userDetail['avatar'];

            if (File::exists($image_path)) {
                File::delete($image_path);
            }


            $url = '';
            $path = Utility::upload_file($request, 'profile', $fileNameToStore, $dir, []);
            if ($path['flag'] == 1) {
                $url = $path['url'];
            } else {
                return redirect()->route('profile', \Auth::user()->id)->with('error', __($path['msg']));
            }


            if (!empty($request->profile)) {
                $user['avatar'] = $fileNameToStore;
            }
            $user['name']  = $request['name'];
            $user['email'] = $request['email'];
            $user->save();
            CustomField::saveData($user, $request->customField);

            return redirect()->route('dashboard')->with(
                'success',
                'Profile successfully updated.'
            );
        }
    }
}
