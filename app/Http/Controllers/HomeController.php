<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function to get home page
    public function index(){

        return view('front.home');
    }
}
