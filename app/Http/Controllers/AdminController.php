<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\asset;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function trainerPromotion()
    {

        $promotionTrainers = User::where('is_active', 1)->where('role', 3)->get();
        $promotionAdmin = User::where('is_active', 1)->whereIn('role', [1])->get();
        $promotionTrainee = User::where('is_active', 1)->whereIn('role', [2])->get();

        return view('promotion.index', compact('promotionTrainers', 'promotionAdmin', 'promotionTrainee'));
    }

    public function schedule()
    {

        return view('admin.schedule.index');
    }

    public function assets()

    {   $assets = asset::all();
        $admins= User::where('role',3)->get();
        return view('admin.Assets.index', compact('admins', 'assets'));
    }

    public function assetsstore(Request $request)
    {
         $validate = $request->validate
         ([
          'assetname' => 'required'
         ]);
         $asset = new asset;
         $asset->assetname = $request->assetname;
         $asset->user_id = $request->user()->id;
         $asset->status = $request->status;
         $asset->save();

        if ($asset) {
            return redirect()->back()->with('success', 'Asset added successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function Transaction()
    {
        return view('admin.Transaction.index');
    }
}