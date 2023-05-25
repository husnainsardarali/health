<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use App\Models\UserSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
        $plans = Subscription::all();
        // dd($plans);
        if(count($plans)==0){
            return "No Plan exist";
        }
        return $plans;
    }
    // Function for Select and activate the Package Plan
    public function selectPlan($id){
        // 
        $plan = Subscription::find($id);
        if(!$plan){
            return "Kindly Select the Correct Plan";
        }
        $expiryDateTime= " ";
        // echo $expiryDateTime = Carbon::now()->addMonths(1200);
        if($plan->duration==12){
            $expiryDateTime = Carbon::now()->addMonths(12);
        }
        if($plan->duration==1){
            $expiryDateTime = Carbon::now()->addMonths(1);
        }
        if($plan->duration==0){
            $expiryDateTime = Carbon::now()->addMonths(1200);
        }
        // echo $expiryDateTime;
        // return "yes";
        UserSubscription::create([
            'user_id' => Auth::id(),
            'subscription_id' => $plan->id,
            'expiry_date' => $expiryDateTime,
        ]);
        return "You have succesfully subscried to ".$plan->name." Plan";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
