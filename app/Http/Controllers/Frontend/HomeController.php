<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('user');
        }

        return view('frontend.home.index');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            if (auth()->user()->level == 'mahasiswa') {
                return redirect('/user')->with('toast-success', 'Login berhasil.');
            } else {
                return redirect('/admin')->with('toast-success', 'Login berhasil.');
            }
        } else {
            return redirect('/')->with('toast-error', 'Username atau Password salah.');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('toast-success', 'Logout berhasil.');
    }
}
