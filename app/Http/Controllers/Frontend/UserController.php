<?php

namespace App\Http\Controllers\Frontend;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('frontend.user.index', compact('questions'));
    }
}
