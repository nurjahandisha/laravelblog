<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function addsubcategory(){

        $subcategories = Subcategory::with('category')->get();
        $categories = Category::get();
        return view('backend.category.addsubcategory',compact('subcategories','categories'));
    }


    public function storesubcategory(Request $request){
        $request->validate([
            'title'=>'required',
        ]);

        $subcategory = new Subcategory();
        $subcategory->title=$request->title;
        $subcategory->slug=$request->slug;
        $subcategory->category_id=$request->category_id;
        $subcategory->save();

        }
}
