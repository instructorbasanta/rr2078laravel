<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //function to load home page
    function home(){
        return view('welcome');
    }

    //function to load about page
    function about(){
        return view('about');
    }
}
