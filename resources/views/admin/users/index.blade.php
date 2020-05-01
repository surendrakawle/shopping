@extends('layouts.app')

@section('content')
            <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Users</h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="body table-responsive">
                <table class="table">
                   <thead >
                            <tr class="bg-primary">
                                 <th >Name</th>
                                 <th >Email</th>
                                 <th >Roles</th>
                                 <th>Created at </th>
                                 <th > </th>
                                 <th > </th>
                             </tr>
                   </thead>
                   <tbody>
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
