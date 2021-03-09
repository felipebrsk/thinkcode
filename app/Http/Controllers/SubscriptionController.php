<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User;

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
            'cost' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|min:1|max:99.99',
        ]);

        $data = $request->except('_token');

        $data['slug'] = strtolower($data['name']);
        $price = $data['cost'] *100; 

        //create stripe product
        $stripeProduct = $this->stripe->products->create([
            'name' => $data['name'],
        ]);
        
        //Stripe Plan Creation
        $stripePlanCreation = $this->stripe->plans->create([
            'amount' => $price,
            'currency' => 'brl',
            'interval' => 'month', //  it can be day,week,month or year
            'product' => $stripeProduct->id,
        ]);

        $data['stripe_plan'] = $stripePlanCreation->id;
        $data['user_id'] = Auth()->user()->id;

        Plan::create($data);

        return back()->with('success_message', 'O plano ' . $request->name .' foi criado com sucesso.');
    }
}