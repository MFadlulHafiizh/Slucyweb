<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $dateNow = Carbon::now();
        $reformatDate = $dateNow->format('j F Y h:i:s A');
        return view('dashboard', compact('reformatDate'));
    }
    public function registid(){
        return view('registid');
    }
    public function signid(){
        return view('signid');
    }
}