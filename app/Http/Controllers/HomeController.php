<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\models\Course;
use App\models\Category;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth::id();
        $userCourses=User::find($id)->courses()->take(3)->get();
        $categories=Category::take(5)->get();

        $notSelectedCourses=DB::select('SELECT * FROM `courses` WHERE id NOT IN(select course_id from user_selected_courses where user_id=?) Limit 3',[$id]);
        
        return view('home',compact('userCourses','notSelectedCourses','categories'));
    }
}
