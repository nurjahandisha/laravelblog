@extends('layouts.backendapp')
@push('customCss')
@section('backendcontent')

<div class="card">
<div class="card-header">ADD Post</div>
<div class="card-body">
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="row">
        <input type="text" name="title" placeholder="Post Title" class="form-control" >
    </div>
    <div class="row">

        <select name="category_id" id="" class="form-comtroll" style="width:33.33%">

        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->title}}</option>

        @endforeach
        </select>

        <select name="subcategory_id" id="" class="form-control" style="width:33.33%">
        @foreach($subcategories as $subcategory)
        <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>

        @endforeach
        </select>

        <select name="type" id="" class="form-control" style="width:33.33%">
        <option value="trending">Trending</option>
        <option value="hot">Hot Topic</option>
        </select>
    </div>
        <div class="row">
            <label for="">
            featured Image
            <input type="file" name="featured" class="form-control">
            </label>
        </div>

            <div class="editor" style="margin: 20px 0">
                <textarea name="content" id="content" class="form-control" placeholder="Editor"></textarea>
            </div>

            <div class="row">
                <input type="text"name="hashtag" class="form-control" placeholder="HashTag">
            </div>
            <button class="btn-primary btn" style="width:100%;margin:20px 0;">Submit</button>





    </form>
</div>

</div>
@endsection

@push('cudtomjs')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endpush

























