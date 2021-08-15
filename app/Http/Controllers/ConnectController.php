<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function login(){
        return view('connect.login');
    }

    public function register(){
        return view('connect.register');
    }
}
