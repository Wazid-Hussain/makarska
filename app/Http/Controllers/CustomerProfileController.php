<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
     public function create()
    {
        $customer = Auth::guard('customer')->user();
        
        // dd($customer);
        return view('customer.profile')->with('customer', $customer);
    }

        public function update(Request $request)
    {
        $customer = Customer::find(Auth::guard('customer')->user()->id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->facebookID = $request->facebook;

        $customer->update();
        return redirect()->route('customer_profile');
    }
    public function addImage(Request $request)
    {
        $imagename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('images', $imagename, 'public');

        $customer = Customer::find(Auth::guard('customer')->user()->id);    
        $customer->image = $imagename;
        $customer->update();
        
        return redirect()->route('customer_profile');
    }
    
    public function changePasswordView(){
        return view('customer.password');
    }

    public function changePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password'   => 'required|confirmed',
        ]);
        
        $hashedPassword = Auth::guard('customer')->user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $customer = Customer::find(Auth::id());
            $customer->password = Hash::make($request->password);
            $customer->save();
            Auth::logout();
            return redirect()->route('customer_login_form');
        }else{
            return redirect()->back()->withErrors(['msg' => 'The Message']);
        }
    }

}
