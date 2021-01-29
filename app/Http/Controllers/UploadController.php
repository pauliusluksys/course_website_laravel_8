<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class UploadController extends Controller
{
    //
	public function __construct()
{
		$this->middleware('auth')->except('upload');



}
	public function index(){

		return view('profilePicture');

	}
public function index1(){

		return view('upload');

	}

	public function store(Request $request)
{
	$validation = $request->validate([
        'file'  =>  'required|file|image|mimes:jpeg,png,gif,jpg|max:2048'
    ]);
	$file = $validation['file'];

	//  $fileName = 'profile-'.time().'.'.$file->getClientOriginalExtension();
	// $path = $file->storeAs('files', $fileName);

	// $time=time();
    // dd($path);
	$course = Course::find(1);
	$course->addMedia($file)->toMediaCollection();


}

}
