<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenity;

class AmenityController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $amenities = Amenity::All(); 
        return view('admin.amenity.all-amenities', compact('amenities'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.amenity.amenities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $all = $request->all();

        $iconname = $request->file('icon')->getClientOriginalName();
        $icon = $request->file('icon')->storeAs('amenity_icons', $iconname, 'public');        
        $all['icon'] = $icon; 

        $amenity = Amenity::create($all);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        return view('admin.amenity.edit_amenities',compact('amenity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenity $amenity)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        // $amenity = Amenity::find($id);
        if($request->hasFile('icon')){
            $request->validate([
              'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $iconname = $request->file('icon')->getClientOriginalName();
            $icon = $request->file('icon')->storeAs('cate_icons', $iconname, 'public');  
            $amenity->icon = $icon;
        }
        $amenity->name = $request->name;
        $amenity->save();
    
        return redirect()->route('amenity.index')->with('success','amenity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();
        return redirect()->route('amenity.index')->with('success','amenity updated successfully');
    }
}
