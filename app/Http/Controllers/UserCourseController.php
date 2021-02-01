<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\UserSelectedCourse;
use App\Models\User;
class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        //return view('userCourses');

        
        $userSelectedCourses = User::find(Auth::id())->courses()->get();
        
        return view('userCourses',compact('userSelectedCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id=Auth::id();
        
        if (UserSelectedCourse::where([
            ['user_id', '=', $id],
            ['course_id', '=', $request->course_id],
            ])->exists()) {
            return back()->withErrors(array('userHasCourse' => 'You already have this course'));
        }

        else{
        $userSelectedCourse = new UserSelectedCourse;

        $userSelectedCourse->user_id=Auth::id();
        $userSelectedCourse->course_id=$request->course_id;
        $userSelectedCourse->percent_done=0;
        $userSelectedCourse->save();

        return redirect('myCourses');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
