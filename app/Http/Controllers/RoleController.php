<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function addrole(){
      $roles = Role::where('name','!=','admin')->get();
      // dd($role);
        return view('backend.roles.addroles',compact('roles'));
    }

    public function storerole(Request $request){
      $request->validate([
        'role' => 'unique:roles,name'
      ]);
      $role = new Role();

      $role->name = $request->role;
      $role->save();
      return back();
    }
}
