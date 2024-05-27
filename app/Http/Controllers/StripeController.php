<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use App\Models\User;

class StripeController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function checkout(): View|Factory|Application
    {
        return view('checkout');
    }

    /**
     * @return RedirectResponse
     * @throws ApiErrorException
     */
    public function test(): RedirectResponse
    {
        Stripe::setApiKey(config('stripe.test.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'tzs',
                        'product_data' => [
                            'name' => 'Premium plan',
                        ],
                        'unit_amount' => 125000, // Updated amount
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @return RedirectResponse
     * @throws ApiErrorException
     */
    public function live(): RedirectResponse
    {
        Stripe::setApiKey(config('stripe.live.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'tzs',
                        'product_data' => [
                            'name' => 'Premium plan',
                        ],
                        'unit_amount' => 150000,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @return RedirectResponse
     */
    public function success(): RedirectResponse
    {
        $user = Auth::user();
        if ($user) {
            $user->is_active = 1;
            $user->save();

            return redirect()->route('trainee.home')->with('success', 'Payment to GYM07 went successfully.');
        }

        return back()->with('error', 'Something went wrong with payments.');
    }
}
