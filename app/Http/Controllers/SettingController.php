<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    function index()
    {

        return view('settings');
    }
}