<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Level;
class CategoryController extends Controller
{
    public function index(){
    	$categories=Category::get();
        
    	return view('categories',compact('categories'));



    }
    public function courses($categorySlug,$category){
        
        $course=DB::table('courses')->select('*')->where('slug','=',$category)->get();

        // Category::select('id')->where('slug','=', $categorySlug)->get();
         return $course;
         // return view('course',compact('course'));
    }
    public function show($categorySlug){
        $course=new Course;
        $media = Course::find(1)->getMedia();
        //$mediaUrl = Course::find(1)->getUrl();
        //$url = Course::last()->getFirstMediaUrl();

        //$mediaItems =$course->getMedia();

    	$categoryCourses=DB::table('categories')->join('courses','courses.category_id','=','categories.id')->select('courses.*','categories.slug as category_slug')->where('categories.slug','=', $categorySlug)->get();


        // $course = Course::find(1);
        // var_dump($course->level->name);

        $level = Level::find(1);
        //var_dump($level->Course->title);

        //$level = Level::find(1)->course;

        $category_id=Category::where('slug',$categorySlug)->select('id')->get();
        
        $categoryCourses1=Course::where('category_id', $category_id[0]->id)->get();
        //dd($categoryCourses1);
        $level1 = Course::find(1)->level;
        //dd($categoryCourses1);
        // foreach ($categoryCourses1 as $course) {
        // echo $course->level;
        // }
    	// Category::select('id')->where('slug','=', $categorySlug)->get();
    	 // return $categoryCourses;

        //dd($media);
    	 return view('categoryCourses',compact('categoryCourses','media','categoryCourses1'));
         //C:\Users\PC\Desktop\person-1.jpeg
    }
}
