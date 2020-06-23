<?php

namespace App\Http\Controllers\Frontend;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id','desc')->get();

        return view('frontend.user.index', compact('questions'));
    }

    public function getQuestion(Request $request)
    {
        $question = Question::find($request->id);

        return $question->course->name;
    }
}
