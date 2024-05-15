<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class NotificationController extends Controller
{
    public function index()
    {
        $notification = Notification::all();
        return view("trainer.index", compact("notifications"));
    }

    public function create()
    {
       return view("trainer.index");
    }

    public function store(Request $request)
   {
    $validator = $request->validate([
        $admin = User::where('role',1)->first(),
        'description' => 'required',
    ]);

    // dd($request);

        $activation_request = new Notification;
        $activation_request->sender_id = Auth::user()->id;
        $activation_request->receiver_id   = $request->receiver;
        $activation_request->text = $request->description;
        $activation_request->asset_id = null;
        $activation_request->is_active = 0;
        $activation_request->save();

        return redirect()->back()->with('success','activation notification sent successfully');



   }



}
