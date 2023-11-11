<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    //
    function index(){
        return view("login");
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'username'  => 'required',
            'password' => 'required|alphaNum|min:4'
        ]);

        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt($user_data))
        {
            return redirect('./main/dashboard');
        }else{
            return back()->with('error','Datos incorrectos');
        }
    }

    function successlogin(){
        return view('dashboard');
    }

    function logout(){
        Auth::logout();
        return redirect('main');
    }
}
