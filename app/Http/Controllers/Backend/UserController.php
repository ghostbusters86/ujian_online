<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function postuser(Request $request)
	{
		$name = $request->name;
		$nim = $request->nim;
		$username = $request->username;
		$password = $request->password;
		$kelas = $request->kelas;
		$level = $request->level;

		$data = [
			'name'  			=> $name,
			'nim'  				=> $nim,
			'username'  		=> $username,
			'password'  		=> password_hash($password, PASSWORD_DEFAULT),
			'password_nohash'  	=> $password,
			'classroom_id' 	 	=> $kelas,
			'level'  			=> $level
		];

		$create = User::create($data);

		if ($create) {
			return redirect()->back();
		} else {
			return redirect()->back();
		}
	}

	public function deleteuser($id)
	{
		dd($id);
	}
}
