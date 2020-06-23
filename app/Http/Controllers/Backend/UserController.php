<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Classroom;

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
		$delete = User::find($id)->delete();


		if ($delete) {
			return redirect()->back();
		} else {
			return redirect()->back();
		}
	}

	public function edituser($id)
	{

		$classroom = Classroom::all();
		$user = User::where('id', $id)->first();

		return view('backend.user.edit', compact('user','classroom'));

	}

	public function updateuser(Request $request)
	{
		$id 		= $request->id;
		$name 		= $request->name;
		$nim 		= $request->nim;
		$username 	= $request->username;
		$password 	= $request->password;
		$kelas 		= $request->kelas;
		$level 		= $request->level;

		$users 					= User::find($id);
		$users->name 	 		= $name;
		$users->nim 	 		= $nim;
		$users->username 	 	= $username;
		$users->password 		= password_hash($password, PASSWORD_DEFAULT);
		$users->password_nohash = $password;
		$users->classroom_id	= $kelas;
		$users->level 	 		= $level;
		$users->update();

		if ($users) {
			return redirect('admin/user');
		} else {
			return redirect('admin/user');
		}
	}
}
