<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Listing;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Session;


class CustomerController extends Controller
{
    public function Index(){
        return view('customer.login');
    }
    

    public function Dashboard(){        
        return view('customer.dashboard');
    }


    public function Login(Request $request){
        $check = $request->all();

        
        if (Auth::guard('customer')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            
            if(Session('formdata.0.total_price')){
                return redirect()->route('billingStep');
            }
            
            return redirect()->route('customer.dashboard')->with('error', 'Customer Login Successfully');
            
            
            
        }else{
            return back()->with('error', 'Invalid User And Password');
        }
    }
    
    public function Register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($customer));

        Auth::guard('customer')->login($customer);
        
            if(Session('formdata.0.total_price')){
               
                return redirect()->route('billingStep');
            }

        return view('customer.dashboard');
    }
    
    

    public function CustomerLogout(){
        Auth::guard('customer')->logout();
        return redirect()->route('index')->with('error', 'Customer Logout Successfully');

    }
}
