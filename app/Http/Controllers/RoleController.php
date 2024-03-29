<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index()
    {
        $roles = DB::table('roles')->get();

        return view('roles', ['roles' => $roles]);
    }


    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        try {
            DB::table('roles')->insert([
                'name' => $request->name,
                'guard_name' => $request->guard_name,
            ]);
            return back()->with('success', 'Role successfully added.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        try {
            DB::table('roles')
                ->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'guard_name' => $request->guard_name,
                ]);

            return back()->with('success', 'Role successfully updated.');
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
            DB::table('roles')
                ->where('id', $id)
                ->delete();
            return back()->with('success', 'Role successfully deleted.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}