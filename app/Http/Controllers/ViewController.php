<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function gotomain(){
        return redirect('main');
    }

}
