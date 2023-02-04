@extends('layouts.backendapp')

@section('backendcontent')
<div class="row">
    <div class="col-lg-4">
    @if(isset($editedcategory))
        <div class="card-header">Edit Category</div>
        <div class="card-body">
        <form action="{{route('category.update',$editedcategory)}}" method="post">
            @csrf
            @method('put')
            <input type="text" class="form-control mt-3" placeholder="Category title" name="title" value="{{$editedcategory->title}}">
            @error('title')
            <span style="color:red">{{$message}}</span>
            @enderror
            <input type="text" class="form-control mt-3"placeholder="category-slug" name="slug" value="{{$editedcategory->slug}}">
            <button class="btn btn-primary mt-3">Update Category</button>
        </form>
        </div>

 </div>
    @else
    <div class="card-header">Add Category</div>
        <div class="card-body">
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <input type="text" class="form-control mt-3" placeholder="Category title" name="title">
            @error('title')
            <span style="color:red">{{$message}}</span>
            @enderror
            <input type="text" class="form-control mt-3"placeholder="category-slug" name="slug">
            <button class="btn btn-primary mt-3">Add Category</button>
        </form>
        </div>

    @endif

    
   
        

    </div>
    <div class="col-lg-8">
        <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>Category Title</th> 
                <th>Slug</th>
                <th>Action</th>
            </tr>
            @foreach($categories as $key=>$category)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <div class="btn-group">
                        <a  href="{{route('category.edit',$category)}}" class="btn btn-primary btn-sm">Edit</a>
                   
                    <form action="{{route('category.delete',$category)}}" method="post">
                    <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
                    @csrf
                    @method('delete')

                    </form>
                </div>

                </td>
            </tr>
            <tr>
                <td>{{++$key}}</td>
                <td>{{$category->title}}</td>
                <td colspan="2">{{$category->slug}}</td>
                
               
            </tr>
            @endforeach
        </table>
    </div>
</div>











@endsection