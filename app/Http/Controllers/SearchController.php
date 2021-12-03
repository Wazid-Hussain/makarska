<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request){
        $listings = Listing::where('category_id', $request->accommodationType)->get();
        
        $category = Category::where('id', $request->accommodationType)->first();
        
        return view('search', compact('listings', 'category'));
    }
}
