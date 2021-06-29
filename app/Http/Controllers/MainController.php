<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getpage()
    {
        return view('site.index');
    }
}
