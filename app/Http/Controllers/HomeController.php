<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function frontPage()
    {
        return view('home.homePage');
    }
    public function newPage()
    {
        return view('home.newPage');
    }
}
