<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function getusers(){
        $users = DB::table('users')->get();
 
        return view('admin.users.index', ['users' => $users]);
    }

    function createuser(Request $request){
        $request ->validate([
            'name'=> 'required|min:6',
            'username'=> 'required|min:6|max:6',
            'password'=> 'required|min:4',
        ]);

        try {
            User::factory()->create([
                'name'=> $request -> name,
                'username'=> $request -> username,
                'password'=> bcrypt($request -> password),
                'remember_token' => Str::random(20),
            ]);
            return back()->with('success','User created successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
        
    }

    function removeuser(Request $request){

        try {
            User::where('id', $request -> id)->delete();
            return back()->with('success','User/s destroyed');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    function updateuser(Request $request){
        $request ->validate([
            'name'=> 'nullable',
            'username'=> 'nullable|min:6|max:6',
            'password'=> 'nullable|min:3',
        ]);
        try {
            $user = User::where('id', $request -> id)->first();
            User::where('id', $request -> id)->update([
                'name'=> ($request -> name != null) ? $request -> name : $user->name, 
                'username'=> ($request -> username != null ? $request -> username : $user->username),
                'password'=> ($request -> password != null ) ? bcrypt($request -> password) : $user->password,
            ]);
            return back()->with('success','User updated');
        }catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
