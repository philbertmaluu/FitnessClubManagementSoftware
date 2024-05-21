<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\notification;

class ActivationController extends Controller
{
    public function activationAccept($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->is_active = 1;
            $user->save();

            $notication = new Notification;
            $notication->is_active = 1;

            return redirect()->back()->with('success', 'User activated successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }

    public function activationCancel($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->is_active = 0;
            $user->save();
            $notication = new Notification;
            $notication->is_active = -1;

            return redirect()->back()->with('success', 'User deactivated successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
