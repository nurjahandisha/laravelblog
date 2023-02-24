@extends('layouts.backendapp')
@push('customCss')
@section('backendcontent')
<h2 class="fs-xl mt-3">ALL POST</h2>

<table class="table table-responsive">
<tr>

<th>#</th>
<th>featured image</th>
<th>title</th>
<th>Action</th>
</tr>



@foreach($posts as $key=>$post)
<tr>

<td>{{++$key}}</td>
<td><img src="{{asset('storage/'.$post->featured_image)}}" alt="{{$post->title}}" style="max-height: 120px;border-redius:10px;"></td>
<td>{{$post->title}}</td>
<td>
    <a href="" class="btn btn-primary">Edit</a>
    <a href="" class="btn btn-danger">Delete</a>
</td>

</tr>
@endforeach





</table>





@endsection