@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Management</div>

                <div class="card-body table-responsive-sm table-responsive-md table-responsive-lg">
                
                   <table class="table table-sm">
                   <thead class="">
                   <tr>
                        <th scope="col" width="10%">#</th>
                        <th scope="col" width="18%">Name</th>
                        <th scope="col" width="18%">Email</th>
                        <th scope="col" width="21%">Roles</th>
                        <th scope="col" width="18%">Created at </th>
                        <th scope="col" width="15%">Action </th>
                    </tr>
                   </thead>
                   <tbody>
                   @foreach( $users as $user)
                   <tr>
                        <th scope="row">{{$i += 1}}</th>
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}} </td>
                        <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}} </td>
                        <td>{{$user->created_at}} </td>
                        <td>
                            @can('edit.users')
                            <a class="float-left" href="{{route('admin.users.edit',$user->id)}}" ><button class="btn btn-primary btn-sm ">Edit</button></a>
                            @endcan 
                            @can('delete.users')
                            <form class="float-left" action="{{route('admin.users.destroy',$user)}}" method="POST" >
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            @endcan
                        </td>
                   </tr>
                   @endforeach
                   </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
