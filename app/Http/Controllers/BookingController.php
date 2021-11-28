<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Auth;

class BookingController extends Controller
{
    /**
     * Display bookings
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $bookings = Booking::whereHas('listing', function($query){
            $query->where('created_by',Auth::user()->id);
        })->get();
        return view('admin/bookings/index', compact('bookings'));
    }

    public function store(Request $request){
        $all = $request->all();
        $all['user_id'] = User::first()->id;
        $all['start_from'] = date('Y-m-d H:i:s' , strtotime($request->start_from));
        $all['end_to'] = date('Y-m-d H:i:s' , strtotime($request->end_to));
        $listing = Booking::create($all);
        return redirect()->back()->with('message', 'Successfully Booked');
    }
}
