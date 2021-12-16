<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class CommentController extends Controller
{
    public function store(Listing $listing){
        request()->validate([
           'rating'=> 'required',
           'comment' =>'required'
        ]);
        $listing->comments()->create([
            
            'user_id'=>'3',
            'comment'=> request('comment'),
            'rating' =>request('rating')
            
            ]);
            
            return redirect()->back();
    }
}
