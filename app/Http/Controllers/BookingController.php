<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Listing;
use Auth;
use Session;

class BookingController extends Controller
{
    /**
     * Display bookings
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {        


        $bookings = Booking::whereHas('listing', function($query){
            $query->where('user_id',Auth::user()->id);
        })->get();
        return view('/user.my-booking', compact('bookings'));
    }

    public function store(Request $request){
        $all = $request->all();
        
        Session::push('formdata', $request->all());
        
        $listing = Listing::where('id', Session('formdata.0.listing_id'))->first();
        
        $listingImage = asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name);
        
        Session::push('listingImage', $listingImage);
        
        if(Auth::guard('customer')->check()){
            // $all['user_id'] = Auth::guard('customer')->user()->id;
            // $all['listing_id'] = Session('formdata.0.listing_id');
            // $all['start_from'] = date('Y-m-d H:i:s' , strtotime(Session('formdata.0.start_from')));
            // $all['end_to'] = date('Y-m-d H:i:s' , strtotime(Session('formdata.0.end_to')));
            
            // $all['adults'] = Session('formdata.0.adults');             
            // $all['children'] = Session('formdata.0.children');             
            // $all['total_price'] = Session('formdata.0.total_price');             
            // $all['additional_info'] = Session('formdata.0.additional_info');            
            
            
            // $listing = Booking::create($all);
            
            // Session::forget('formdata');
            return view('payment.billing');
        }
        else{
            // $listing = Listing::where('id', $request->listing_id)->first();
            return view('payment.index');
        }
        
        
        

       
    }
    
    
    
    public function userBooking(){
        $bookings = Booking::where('user_id',Auth::guard('customer')->user()->id)->paginate(3);
        return view('/customer.bookings', compact('bookings'));
    }


}
