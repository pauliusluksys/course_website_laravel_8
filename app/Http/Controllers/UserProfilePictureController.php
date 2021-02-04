<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class UserProfilePictureController extends Controller
{
    public function __construct()
{
		$this->middleware('auth')->except('upload');



}
	public function index(){
		$userModel=User::find(Auth::id());
		$usermediaItems = $userModel->getMedia('avatars');
		
		if($usermediaItems->isEmpty()){
			$fullPathOnDisk = Storage::url('default.png');
		}
		else{
		$fullPathOnDisk = $usermediaItems[0]->getUrl();
		}
		return view('profilePicture',compact('fullPathOnDisk'));


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

		$userModel = User::find(Auth::id());
		$userMediaItems = $userModel->getMedia('avatars');
		$userMediaItems->each->delete();
		$userModel->addMedia($file)->toMediaCollection('avatars');

		return redirect('/profile/upload');

}
}
