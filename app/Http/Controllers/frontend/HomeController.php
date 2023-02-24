<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function showcategorypost($slug){
     $category = Category::where('slug',$slug)->first();
     $posts = Post::where('category_id',$category->id)->with('user')->paginate(3);
    //  dd($posts);
     return view('frontend.categoryshow',compact('category','posts'));
    //  dd($category);

    }

    public function showsubcategorypost($slug){
        $category = Subcategory::where('slug',$slug)->first();
        $posts = Post::where('subcategory_id',$category->id)->with('user')->paginate(3);
        //  dd($posts);
         return view('frontend.categoryshow',compact('category','posts'));
    }




    public function showpost($slug){
       $post = Post::with('category','user')->where('slug',$slug)->first();
      
    return view('frontend.singleblog',compact('post'));

    }



    public function searchpost(Request $request){
      $post = post::where('title','like','%',$request->searchpost,'%')->get();
      return  json_decode($post);
    }



}
