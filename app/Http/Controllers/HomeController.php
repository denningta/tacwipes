<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('coming-soon');
    }

    public function index()
    {
        return view('index');
    }

    public function about() 
    {
        return view('about');
    }




}
