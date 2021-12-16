<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;

class PageController extends Controller
{
    public function about(){
        return view('about');
    }
    public function accommodations(){
        $listings = Listing::with('images')->get();
        $categories = Category::get();
        return view('accommodations', compact('listings','categories'));
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
        public function signup(){
        return view('register.create');
    }
    public function projects(){
        return view('projects');
    }
    
    public function blogOne(){
        return view('strande_unsere_3_lieblingsstrande_an_der_makarska_riviera');
    }
    
    public function blogTwo(){
        return view('restaurants_unsere_3_lieblingsrestaurants_an_der_makarska_riviera');
    }
    
    public function blogThree(){
        return view('sehenswurdigkeiten_unsere_3_must_sees_an_der_makarska_riviera');
    }
    
}
