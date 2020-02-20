<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
     public function createUser(){
     	return view('admin.user.createUser');
     }

     public function storeeUser(Request $request){
     	$this->validate($request,[
     		'name'=>'required',
     		'email'=>'required',
     		'password'=>'required',
     	]);

     	DB::table('users')->insert([
     		'name' => $request->name,
     		'email' => $request->email,
     		'password' => $request->password
     	]);

     	return redirect()->back()->with('message', 'User save successfully');
     }

     public function manageUser(){
          $users = User::all();

          return view('admin.user.manageUser',['users'=> $users]);
     }
}
