<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Gate;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('admin.users.index')->with(['users'=>$users,'i'=>0]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit.users'))
        {
            return redirect(route('admin.users.index'));
        }
        $roles=Role::all();
        return view('admin.users.edit')->with([
            "user"=>$user,
            "roles"=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       // dd($user->roles);
       //dd($request->role);
        $user->name=$request->name;
        $user->email=$request->email;
        if($user->save())
        {
            $request->session()->flash('success',$user->name .' has been updated.');
        }
        else{
            $request->session()->flash('error','There was an error updating the user.');
        }
            $user->roles()->sync($request->role);
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete.users'))
        {
            return redirect(route('admin.users.index'));
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
