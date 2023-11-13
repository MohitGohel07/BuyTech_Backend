<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));

        $charge = Charge::create([
            'amount' => $request->amount,
            'currency' => $request->currency,
            'source' => $request->payment_method_id,
            'description' => 'Your payment description',
        ]);

        if ($charge->status === 'succeeded') {
            // Payment successful
        } else {
            // Payment failed
        }
    }
}
