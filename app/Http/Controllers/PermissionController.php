<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    function index()
    {
        $permissions = DB::table('permissions')->get();

        return view('permissions', ['permissions' => $permissions]);
    }



    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        try {
            DB::table('permissions')->insert([
                'name' => $request->name,
                'guard_name' => $request->guard_name,
            ]);
            return back()->with('success', 'Permission successfully added.');
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
            DB::table('permissions')
                ->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'guard_name' => $request->guard_name,
                ]);

            return back()->with('success', 'Permission successfully updated.');
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
            DB::table('permissions')
                ->where('id', $id)
                ->delete();
            return back()->with('success', 'Permission successfully deleted.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

}