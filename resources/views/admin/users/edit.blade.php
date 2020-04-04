@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit user {{$user->name}}</div>

                <div class="card-body">
                    <form action="{{route('admin.users.update',$user)}}" method="POST">
                    @csrf
                    {{method_field('PUT')}}
                        @foreach($roles as $role)
                        <div class="form-check ">
                        <label class="container1"> {{$role->name}}
                            <input type="checkbox" name="role[]" value="{{$role->id}}">
                            <span class="checkmark"></span>
                        </label>
                        </div>
                        @endforeach
                        <button class="btn btn-md btn-primary">Update</button>   
                 </form>
                
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
