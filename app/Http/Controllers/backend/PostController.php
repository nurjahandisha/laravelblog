<?php

namespace App\Http\Controllers\backend;

use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function addpost(){

        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('backend.post.addpost' , compact('categories','subcategories'));
    }


    public function storepost(Request $request){

        $ext = $request->featured->extension();
        $filename = $this->slugenerator($request->title).'.'.$ext;
       $image = $request->featured->storeAs('uploads/',$filename,'public');
        // dd($image);
        
        
        $post = new Post();
        $post->user_id = auth()->user()->id ;
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->title =$request->title;
        $post->slug =$this->slugenerator($request->title);
        $post->type =$request->type;
        $post->featured_image = $image;
        $post->content =$request->content;
        $post->save();
        return back();

    // dd($request->feat());
    }

    public function allpost(){
        $posts = post::where('user_id',auth()->user()->id)->get();
        return view ('backend.post.allpost',compact('posts'));
    }











    private function slugenerator($title,$slug = null){


        if($slug==null){
            $newslug = str()->slug($title);
        }else{
            $newslug = str()->slug($slug);  
        }
        $count = category::where('slug','LIKE','%'.'$newslug'.'%')->count();
        if ($count > 0){
            $newslug =  $newslug .'-'.'count++';
        }
        return $newslug;
    






    }

}
