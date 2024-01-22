<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function index()
    {
        $users = User::get();

        return view('users', ['users' => $users]);
    }

    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success', 'User successfully added.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    function delete(Request $request)
    {
        $id = $request->validate([
            'id' => ['required', 'numeric'],
        ]);

        try {
            User::destroy($id);
            return back()->with('success', 'User successfully deleted.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    function update(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = User::findOrFail($request->id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->save();
            return back()->with('success', 'User successfully updated.');
        } catch (\Throwable $th) {

            return back()->with('error', $th->getMessage());
        }

    }
}