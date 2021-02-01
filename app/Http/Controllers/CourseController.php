<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSelectedCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
		return view('course');
	}


    public function show($courseSlug){
    	
    	// $course=DB::table('courses')->select('*')->where('slug','=',$courseSlug)->get();
    	$course=Course::where('slug',$courseSlug)->get();
    	
    	// Category::select('id')->where('slug','=', $categorySlug)->get();
    	//dd($course);
    	 return view('course',compact('course'));
    	 // return view('course',compact('course'));
    }


    public function store(Request $request){

    	return redirect()->route('profile.index')
            ->with('success', 'Project updated successfully');
    	


    }



    
    


}


