<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Answer;
use App\Classroom;
use App\Course;
use App\Question;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function user()
    {
    	$users = User::all();

        return view('backend.user.index', compact('users'));
    }

    public function soal()
    {
    	$question = Question::all();

        return view('backend.soal.index', compact('question'));
    }

    public function hasil()
    {
    	$answers = Answer::all();

        return view('backend.hasil.index',compact('answers'));
    }

    public function matkul()
    {

    	$matkuls = Course::all();

        return view('backend.matkul.index',compact('matkuls'));
    }

    public function class()
    {

    	$classroom = Classroom::all();

        return view('backend.class.index',compact('classroom'));
    }

}
