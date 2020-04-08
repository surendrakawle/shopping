@extends('layouts.app')

@section('content')
<div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Edit user {{$user->name}}</h2>
                                </div>
                                
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                           <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">
                
                                <form action="{{route('admin.users.update',$user)}}" class="form-horizontal" method="POST">
                   
                                <div class="row clearfix">

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                           <label for="email">Email Address</label>
                                    </div>
                                     <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                           <div class="form-group">
                                               <div class="form-line">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                                   @error('email')
                                                       <span class="invalid-feedback" role="alert">
                                                           <strong>{{ $message }}</strong>
                                                       </span>
                                                   @enderror   
                                                </div>
                                           </div>
                                       </div>
                           
                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                           <label for="Name">Name</label>
                                    </div>
                                     <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                           <div class="form-group">
                                               <div class="form-line">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required  autofocus>

                                                 @error('name')
                                                     <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                     </span>
                                                 @enderror
                                                </div>
                                           </div>
                                       </div>
                           
                                </div>
                                 @csrf
                                    {{method_field('PUT')}}
                                <div class="row clearfix">

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                           <label for="Roles">Roles</label>
                                    </div>
                                     <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                           <div class="form-group">
                                               <div >
                                                 @foreach($roles as $role)
                                                <div class="form-check ">
                                                <label class="container1"> {{$role->name}}
                                                    <input type="checkbox" name="role[]" value="{{$role->id}}"
                                                    @if($user->roles()->pluck('roles.id')->contains($role->id)) checked @endif >
                                                    <span class="checkmark"></span>
                                                </label>
                                                </div>
                                                @endforeach
                                                </div>
                                           </div>
                                       </div>
                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                          
                                    </div>
                                     <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                           <div class="form-group">
                                                <button class="btn btn-md btn-primary">Update</button>
                                         
                                         <a href=""> 
                                                <button class="btn btn-md btn-danger">Cancel</button> 
                                         </a> 
                                           </div>
                                       </div>
                                </div>
                                </form>   
                
                        </div>
            
                        </div>
                    </div>

@endsection
