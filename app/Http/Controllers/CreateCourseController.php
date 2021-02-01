<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class CreateCourseController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

public function show(){

	$levels=Level::get();
	$categories=Category::get();
	return view('createCourse',compact('levels','categories'));

}

protected function create(array $data)
    {


    }



public function store(Request $request){
		$this->validate($request,[
    		'title'=>'required',
    		'description'=>'required',
    		'time_to_complete'=>'required',
    		'level'=>'exists:levels,id',
    		'category'=>'exists:categories,id',
    	]);
		//dd($request);
		
		$level = Level::where('name', $request->level)->first();
		
		
    	$course = new Course;

        
        $course->meta_title=$request->title;
        $course->title=$request->title;
        $course->slug=Str::slug($request->title, '-');
        $course->description=$request->description;
        $course->creator=Auth::user()->username;
        $course->time_to_complete=$request->time_to_complete;
        $course->category_id=$request->category;
        $course->level_id=$request->level;
        $course->save();
        	return redirect()->route('home');
    }
}