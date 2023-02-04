@extends('layouts.backendapp')

@section('backendcontent')
<div class="row">
    <div class="col-lg-4">
    @if(isset($editedcategory))
        <div class="card-header">Edit sub-Category</div>
        <div class="card-body">
        <form action="" method="post">
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
    <div class="card-header">Add Sub-Category</div>
        <div class="card-body">
        <form action="{{route('category.sub.store')}}" method="post">
            @csrf
            <select name="category_id" class="form-control">
                <option disabled selected>select category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
            </select>
            <input type="text" class="form-control mt-3" placeholder="Category title" name="title">
            @error('title')
            <span style="color:red">{{$message}}</span>
            @enderror


            <input type="text" class="form-control mt-3"placeholder="category-slug" name="slug">
            <button class="btn btn-primary mt-3">Add Sub-Category</button>
        </form>
        </div>

    @endif

    
   
        

    </div>
    <div class="col-lg-8">
        <table class="table table-responsive">
            <tr>
                <th>#</th>
                <th>sub-Category Title</th> 
                <th>Parent Name</th>
                <th>Action</th>
            </tr>
            @foreach($subcategories as $key=>$subcategory)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$subcategory->title}}</td>
                <td>{{$subcategory->category->title}}</td>
                <td>
                    <div class="btn-group">
                        <a  href="" class="btn btn-primary btn-sm">Edit</a>
                   
                    <form action="" method="post">
                    <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
                    @csrf
                    @method('delete')

                    </form>
                </div>

                </td>
            </tr>
            @endforeach
           
        </table>
    </div>
</div>











@endsection