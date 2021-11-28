<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;

class BookingController extends Controller
{
    public function store(Request $request){
        $all = $request->all();
        $all['user_id'] = User::first()->id;
        $all['start_from'] = date('Y-m-d H:i:s' , strtotime($request->start_from));
        $all['end_to'] = date('Y-m-d H:i:s' , strtotime($request->end_to));
        $listing = Booking::create($all);
        return redirect()->back()->with('message', 'Successfully Booked');
    }
}