<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Create(){
        return view('admin.category.category');
    }

      public function Store(Request $request){
        $this->validate($request, [
            'title'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $all = $request->all();

        $imagename = $request->file('image')->getClientOriginalName();
        $image = $request->file('image')->storeAs('cate_images', $imagename, 'public');        
        $all['image'] = $image; 

        $category = Category::create($all);
        return redirect()->back();
    }
    public function Show(){
        $categories = Category::All();
        return view('admin.category.all-categories', compact('categories'));
    }

    public function edit(Category $category){
        return view('admin.category.edit_category',compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $category = Category::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $category->image = $path;
        }
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();
    
        return redirect()->route('all-categories')->with('success','category updated successfully');
    }


    public function destroy(Category $category){
        $category->delete();
    
        return redirect()->route('all-categories')
                        ->with('success','category has been deleted successfully');
    }

}
