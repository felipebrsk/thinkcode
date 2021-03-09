<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{   
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
    }

    public function create(Request $request, Plan $plan)
    {
        $plan = Plan::findOrFail($request->get('plan'));
        
        $user = $request->user();
        $paymentMethod = $request->paymentMethod;

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $user->newSubscription('default', $plan->stripe_plan)
            ->create($paymentMethod, [
                'email' => $user->email,
            ]);
        
        $setSub = $request->user();
        $setSub->update(['is_subscribed' => $setSub->is_subscribed = 1]);
        
        //Insert into payments table
        $payment = new Payment;
        $payment->user_id =     Auth()->user()->id;
        $payment->plan =        $request->plan_name;
        $payment->amount =      $request->amount;
        $payment->name =        $request->name;
        $payment->email =       $request->email;
        $payment->address =     $request->address;
        $payment->city =        $request->city;
        $payment->country =     $request->country;
        $payment->CEP =        $request->CEP;
        $payment->save();
        
        return redirect()->route('home')->with('success', 'Your plan subscribed successfully');
    }


    public function createPlan()
    {
        return view('plans.create');
    }

    public function storePlan(Request $request)
    {   
        $request->validate([
            'name' => 'required|min:5|max:80|unique:plans',
            'cost' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|min:1',
        ]);

        $data = $request->all();

        $data['slug'] = strtolower($data['name']);
        $price = $data['cost'] * 100; 

        $stripeProduct = $this->stripe->products->create([
            'name' => $data['name'],
        ]);
        
        $stripePlanCreation = $this->stripe->plans->create([
            'amount' => $price,
            'currency' => 'brl',
            'interval' => 'month', 
            'product' => $stripeProduct->id,
        ]);

        $data['stripe_plan'] = $stripePlanCreation->id;

        Plan::create($data);

        return back()->with('success_message', 'O plano foi criado com sucesso.');
    }
}