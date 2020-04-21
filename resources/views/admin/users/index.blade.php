@extends('layouts.app')

@section('content')
            <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Users</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
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
                <div class="card-body responsive table-responsive-sm table-responsive-md table-responsive-lg">
                
                   <table class="table table-sm" max-width="100%">
                   <thead class=""  max-width="100%">
                   <tr class="bg-primary">
                        <th scope="col" width="18%">Name</th>
                        <th scope="col" width="22%">Email</th>
                        <th scope="col" width="20%">Roles</th>
                        <th scope="col" width="18%">Created at </th>
                        <th scope="col" > </th>
                        <th scope="col" > </th>
                    </tr>
                   </thead>
                   <tbody  max-width="100%">
                   @foreach( $users as $user)
                   <tr>
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}} </td>
                        <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}} </td>
                        <td>{{$user->created_at}} </td>
                        <td>
                            <span>
                            @can('edit.users')
                            <a class="float-left" href="{{route('admin.users.edit',$user->id)}}" ><button class="btn btn-primary btn-sm ">Edit</button></a>
                            @endcan 
                            </span>
                          </td>
                          <td>
                            <span>
                            @can('delete.users')
                            <form class="float-left" action="{{route('admin.users.destroy',$user)}}" method="POST" >
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            @endcan
                            </span>
                        </td>
                   </tr>
                   @endforeach
                   </tbody>
                    </table>
                        </div>
            
                        </div>
                    </div>
                
@endsection
