<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function processPayment(Request $request){
        Stripe::setApiKey(env('STRIPE_KEY'));

        try {
            $charge = Charge::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'source' => $request->stripetoken,
                'description' => 'Test payment'
            ]);

            return response()->json(['success' => 'Processed!']);
        } catch (\Exception $error) {
            return response()->json(['error' => ])
        }

    }
}
