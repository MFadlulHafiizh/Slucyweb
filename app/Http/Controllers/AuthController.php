<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function forgotpass(){
        return view('forgotpass');
    }
    public function contact(){
        return view('contact');
    }
    public function resetpass(){
        return view('resetpass');
    }
    public function about(){
        return view('about');
    }
}
