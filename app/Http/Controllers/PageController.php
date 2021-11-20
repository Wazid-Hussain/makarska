<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('about');
    }
    public function listing(){
        return view('listing');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
}
