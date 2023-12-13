<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function getroles(){
        $roles = DB::table('roles')->get();
 
        return view('admin.roles', ['roles' => $roles]);
    }
}
