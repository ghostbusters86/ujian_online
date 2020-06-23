<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function postLogin()
    {
        // if (Auth::attempt()->only())
    }
}
