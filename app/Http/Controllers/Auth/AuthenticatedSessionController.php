<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();


        if ($user->role == 2) {
            return redirect()->route('trainee.home');
        }
         
        if($user->role == 3) {
        return redirect()->route('trainer.home');

<<<<<<< HEAD
        }

        return redirect()->route('dashboard');
=======
        if ($user->role == 3) {
            return redirect()->route('trainer.home');
        }


        if ($user->role == 1) {
            return redirect()->route('dashboard');
        }
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
