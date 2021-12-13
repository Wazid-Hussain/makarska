<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Session;
use App\Models\Booking;

use Stripe;

class PaymentController extends Controller
{
    public function index(Request $request){        
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $customer = Customer::create([
            'name' => $request->firstName. ' ' .$request->firstName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);        
        event(new Registered($customer));
        Auth::guard('customer')->login($customer);
        return redirect()->intended('/payment-step-2');
    } // Method End
    
    public function billingStepPage(){
        return view('payment.billing');
    } // Method End

    public function billingStep(Request $request){ 
        $all = $request->all(); 
        $request->validate([
            'billing_city' => ['required'],
            'billing_country' => ['required'],
            'billing_state' => ['required'],
            'billing_zip' => ['required'],
        ]);
        $bookingsOld = Booking::all();
        $update = false;
        foreach($bookingsOld as $oldBooking){
            if (Session::get('current_id.0') == $oldBooking->id) {
                $update = true;
                break;
            }
        }        
        if ($update === true) {
            $upBooking = Booking::find(Session::get('current_id.0'));
            $all = $request->all(); 
            $upBooking->update($all);
            return redirect()->route('paymentStep');
        }

        $all['user_id'] = Auth::guard('customer')->user()->id;
        $all['listing_id'] = Session('formdata.0.listing_id');
        $all['start_from'] = date('Y-m-d H:i:s' , strtotime(Session('formdata.0.start_from')));
        $all['end_to'] = date('Y-m-d H:i:s' , strtotime(Session('formdata.0.end_to')));        
        $all['adults'] = Session('formdata.0.adults');             
        $all['children'] = Session('formdata.0.children');             
        $all['total_price'] = Session('formdata.0.total_price');             
        $all['additional_info'] = Session('formdata.0.additional_info');         
        $all['step'] = 2;

        $booking = Booking::create($all);
        Session::push('current_id', $booking->id);
        return redirect()->route('paymentStep');
    } // Method End

    public function paymentStepPage(){
        return view('payment.payment');
    } // Method end


    public function paymentStep(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => Session('formdata.0.total_price') * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Test payment from Makarska Exclusive.",
                "metadata" => ["boking_id" => Session::get('current_id.0'),
                                "user_name" => $request->name,
                                
                ]
        ]);
        Session::flush();   
        Session::flash('success', 'Payment successful!');           
        return redirect()->route('thankyouStep');
    }
    






    public function thankyouStep(){
        return view('payment.thanks');
    }
}
