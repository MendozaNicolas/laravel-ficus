<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function gotomain(){
        return redirect('main');
    }
    
    function users(){
        return view('admin.users.index');
    }
}
