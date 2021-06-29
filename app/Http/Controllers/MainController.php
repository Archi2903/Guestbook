<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getmain()
    {
        return view('site.index');
    }

    public function getabout()
    {
        return view('site.about');
    }

    public function getcontact()
    {
        return view('site.contact');
    }
}
