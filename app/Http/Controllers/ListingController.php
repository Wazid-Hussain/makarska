<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Amenity;
use App\Models\Booking;
use App\Models\ListingImage;
use App\Traits\UploadImageTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::get();
        $categories = Category::limit(5)->get();
        return view('home', compact('listings','categories'));
    }

    /**
     * Display a listing of the category
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryListing(Request $request, $category)
    {
        $categories = Category::all();
        $category = Category::where('title',$category)->first();
        $listings =Listing::with('images')->where('category_id',$category->id)->get();
        return view('category-listing', compact('listings','categories','category'));
    }



    public function singleListing(Request $request, Listing $listing)
    {        
        
        // $amenities = Amenity::all();
        
        // $listy = Listing::with('amenities')->get();

        // dd($listy);
        
        $listings =Listing::with('images')->where('id',$listing->id)->first();        
        $category = Category::where('id',$listing->category_id)->first();
        $user = User::where('id',$listing->user_id)->first();
        $userListings = Listing::where('user_id',  $listing->user_id)->get();
        $listingImages = ListingImage::where('listing_id', $listing->id)->get();
        
        $bookedDates = [];
        $bookings = Booking::where('listing_id',$listing->id)
                        ->get();
        foreach($bookings as $booking) {    
            $period = CarbonPeriod::create($booking->start_from, $booking->end_to);
            foreach ($period as $date) {
                if(! in_array($date->format('m/d/Y'), $bookedDates)) {
                    $bookedDates[] = $date->format('m/d/Y');
                }
            }
        }
        
        $amen = Listing::with(['amenities'])->where('id',$listing->id)->get();
        
        
        return view('single-listing', compact('listing', 'category', 'listingImages', 'bookedDates','user','userListings', 'amen'));
    }




    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $amenities = Amenity::all();
        $categories = Category::all()->pluck('title','id')->toArray();
        return view('user.add-listing', compact('categories', 'amenities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'title'  => 'required',
            'keywords'  => 'required',
            'description'  => 'required',
            'images'  => 'min:3',
            'images.*'  => 'mimes:jpeg,jpg,png,gif,webp' 
        ]);
        $all = $request->all();
        
        
        $amenities = $request->input('amenities');
        foreach($amenities as $amenity){
            $all['amenities'] = $amenity;
        }
        
        // $listing = Listing::create($all);
        $all['created_by'] = Auth::user()->id;
        $listing = $request->user()->listings()->create($all);
        
        if ($files=$request->file('images')) {
            $images = array();
            $path = 'listing_images';
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $name = explode('.', $filename)[0];
                $ext = strtolower($file->getClientOriginalExtension());
                $filename = $name . '.'.$ext;
                $file_upload_status = $this->imageUpload($file,$path,$name);
                if ($file_upload_status) {                    
                    ListingImage::create(['listing_id'=>$listing->id,'path'=>$path,'image_name'=>$filename]);
                    $images[] = $filename;
                }
            }
        }
        
        if ($request->amenities) {
            $listing->amenities()->attach($request->amenities);
        }
        
        return redirect('/dashboard')->with('message','Added succesfully!'); 
        
    }


    public function myListings()
    {
        $user = Auth::user();
        $myListings = $user->listings()->paginate(4);   
        return view('user.my-listings', compact('myListings'));  
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
