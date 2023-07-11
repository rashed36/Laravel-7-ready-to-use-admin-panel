<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\User;
class RoleController extends Controller
{
    public function rolePermission()
    {	
    	$users = User::all();
    	return view('admin.setting.index')->with('users',$users);
    }
    public function role_edit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.setting.roleEdit')->with('users',$users);
    }
    public function role_update(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('name');
    	$users->usertype = $request->input('usertype');
    	$users->update();

        session::flash('success','You Successfully Changed Role.');

    	return redirect('/Role/Permation');
    }

    public function role_delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['status' => 'Your imaginary Data is deleted :)',]);
    }
}
