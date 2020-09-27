<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function postmatkul(Request $request)
    {
        $name = $request->name;
		$lecture = $request->lecture;

		$data = [
			'name'  	=> $name,
			'lecture'  	=> $lecture
		];

		$create = Course::create($data);

		if ($create) {
			return redirect()->back();
		} else {
			return redirect()->back();
		}
    }

    public function deletematkul($id)
	{
		$delete = Course::find($id)->delete();

		if ($delete) {
			return redirect()->back();
		} else {
			return redirect()->back();
		}
    }
    
    public function editmatkul($id)
	{

		$course = Course::where('id', $id)->first();

		return view('backend.matkul.edit', compact('course'));

    }
    
    public function updatematkul(Request $request)
	{
		$id 		= $request->id;
		$name 		= $request->name;
		$lecture 	= $request->lecture;

		$users 					= Course::find($id);
		$users->name 	 		= $name;
		$users->lecture 	 	= $lecture;
		$users->update();

		if ($users) {
			return redirect('admin/matkul');
		} else {
			return redirect('admin/matkul');
		}
	}
}
