<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserProfilePictureController;
use App\Http\Controllers\UserSecurityController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//first 


Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

 Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');

})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



Route::get('profile/security', [UserSecurityController::class,'index']);
Route::post('profile/upload', [UserProfilePictureController::class,'store']);

Route::get('profile/upload', [UserProfilePictureController::class,'index'])->name('upload');

Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
Route::post('profile',[ProfileController::class,'update'])->name('profile.update');
//Route::post('profile/upload',[ProfileController::class,'storePicture'])->name('profileUpload');
Route::get('categories',[CategoryController::class,'index'])->name('categories');

Route::get('categories/{name}',[CategoryController::class,'show'])->name('categoriesShow');

Route::get('categories/{name}/{name2}',[CategoryController::class,'courses'])->name('categoryCourses');

Route::get('course/{name}',[CourseController::class,'show'])->name('course');

Route::post('course',[CourseController::class,'store'])->name('course.store');

Route::post('course',[UserCourseController::class,'store'])->name('userCourse.store');
Route::get('/myCourses',[UserCourseController::class,'index'])->name('userCourse.index');

// Route::get('profile',[ProfileController::class,'index'])->name('profile');



 Route::post('/createcourse',[CreateCourseController::class,'store'])->name('create.create');


 Route::get('/createcourse',[CreateCourseController::class,'show'])->name('create');


Route::post('logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/signup',[RegisterController::class,'index'])->name('signup');
Route::post('/signup',[RegisterController::class,'store']);


Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
