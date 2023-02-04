<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //

    public function addCategory(){
       $categories = Category::with('subcategories')->latest()->get();
        return view('backend.Category.addCategory',compact('categories'));
    }


    public function storeCategory(Request $request)
    {
        $request->validate([
            'title'=>'required|string'
        ]);

        // storing portion
        $category=new Category();
        $category->title = $request->title;
        $category->slug = $this->sluggenerator($request->title,$request->slug);
        $category->save();
        return back();

    }

    public function editcategory(category $category)
    {
        $editedcategory = $category;
        $categories = Category::latest()->get();
        return view('backend.Category.addCategory',compact('categories','editedcategory'));
    }

    public function updateCategory(Request $request,category $category){
        $request->validate([
            'title'=>'required|string'
        ]);

        $category->title = $request->title;
        $category->slug = $this->sluggenerator($request->title,$request->slug);
        $category->save();
        return redirect()->route('category.add');
    }

    public function deletecategory(category $category){
        $category->delete();
        return back();
    }













    public function sluggenerator($title,$slug=null){
        if($slug == null){
            $newslug = $title;
        }else{
            $newslug = $slug;
        }
        return $newslug;
    }
}

