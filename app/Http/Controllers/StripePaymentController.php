<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    public function form()
    {
        return view('stripe.form');
    }

    public function makePayment(Request $request)
    {
        $input = $request->all();
        \Stripe\Stripe::setApiKey('sk_test_51JnSYOG5sMnGX2wgl10P7DoqPRuwejsTxh2IWJZWytFRVr4hKa1YW6EB4kA6lOO6bCnsZSF8hILUKuxiKvkxLRN800GwlOtI9t');
        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 1000,
            'currency' => 'usd',
          ], 
        );

        if ($charge->status == 'succeeded') {
            return redirect()->route('form')->with('message', 'Payment done successfully!');
        }
    }
}
