<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getmain()
    {
        return view('index');
    }

    public function getabout()
    {
        return view('about');
    }

    public function getcontact()
    {
        return view('contact');
    }
}
