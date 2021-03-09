<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the Plan.
     *
     * @return mixed
     */
    public function show($id, Request $request)
    {
        $plan = Plan::find($id);

        $paymentMethods = $request->user()->paymentMethods();

        $intent = $request->user()->createSetupIntent();
        
        return view('plans.show', compact('plan', 'intent'));
    }
}