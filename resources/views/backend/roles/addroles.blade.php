@extends('layouts.backendapp')
@section('backendcontent')

<div class="col-lg-6 mt-5 mx-auto">
    <div class="card">
        <div class="card-header">Add new Roll</div>
        <div class="card-body">
            <form action="{{route('role.store')}}" method="post">
                @csrf
                <input class="form-control" name="role" type="text">
                @error('role')
                <span class="text text-danger">{{$message}}</span>
                @enderror
                <button type="submit" class="btn btn-primary"style="width: 100%; margin-top:14px;">Submit</button>
            </form>
        
        </div>
    </div>
</div>



<div class="mt-5">
<table class="table table-responsive">
    <tr>
    <th>#</th>
    <th>Role Name</th>
    <th>Action</th>
    </tr>

    @foreach($roles as $key=>$role)
    <tr>
    <td>{{++$key}}</td>
    <td>{{$role->name}}</td>
    <td>
        <a href="#" class="btn btn-primary btn-sm">Edit</a>
    </td>
    </tr>
    @endforeach()
</table>




</div>






@endsection
