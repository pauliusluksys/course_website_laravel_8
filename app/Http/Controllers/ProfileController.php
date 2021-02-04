<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    //
	public function __construct()
{
		$this->middleware('auth')->except('upload');



}
	public function index(){
		//$category = Category::find(1);
		//$mediaItems = $category->getMedia();
		//dd($mediaItems);
		$id = Auth::id();
		$user=DB::select('select * from users where id=?',[$id]);
		//dd($user);
		return view('profileInformation',compact('user'));

	}


	public function storePicture(Request $request)
	{

		$validation = $request->validate([
	        'file'  =>  'required|file|image|mimes:jpeg,png,gif,jpg|max:2048'
	    ]);
		$file = $validation['file'];

		//  $fileName = 'profile-'.time().'.'.$file->getClientOriginalExtension();
		// $path = $file->storeAs('files', $fileName);

		// $time=time();
	    // dd($path);
		$profile = Category::find(1);
		$profile->addMedia($file)->toMediaCollection('avatars');


	}
	public function update(Request $request){
		$id = Auth::id();
		 $validation = $request->validate([
	         
	        'username' => "unique:users,username,{$id}|required|max:50",
	        'headline' => 'required|max:60',
	        'description'=>'required|max:255'

	    ]);
		 // $validator = Validator::make($input, [
		 // 	'headline' => ['required','max:60',],
			// 'username' => ['required','max:50',Rule::unique('users')->ignore($user->id),],
			// 'description'=>['required','max:255',],
		 // 	]);
			

		 

		 

		 $userData=User::find($id);
		 //dd($request->all());
		 $userData->username=$request->username;
		 $userData->ocupation=$request->headline;
		 $userData->description=$request->description;
		 $userData->save();

		 return redirect()->route('profile.index')
            ->with('success', 'Project updated successfully');
	}
	
	public function storeMain(Request $request)
	{
	}


}
