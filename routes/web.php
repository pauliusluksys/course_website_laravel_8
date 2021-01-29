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
Route::post('/upload', [UploadController::class,'store']);
Route::get('upload', [UploadController::class,'index'])->name('upload');
Route::get('upload1', [UploadController::class,'index1'])->name('upload1');

Route::post('/profileUpload', [ProfileController::class,'store']);
Route::get('profileUpload', [ProfileController::class,'index'])->name('profileUpload');


Route::get('categories',[CategoryController::class,'index'])->name('categories');

Route::get('categories/{name}',[CategoryController::class,'show'])->name('categoriesShow');

Route::get('categories/{name}/{name2}',[CategoryController::class,'courses'])->name('categoryCourses');

Route::get('course/{name}',[CourseController::class,'show'])->name('course');

Route::post('course',[CourseController::class,'store'])->name('course.store');

Route::post('course',[UserCourseController::class,'store'])->name('userCourse.store');
Route::get('/myCourses',[UserCourseController::class,'index'])->name('userCourse.index');

// Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
Route::post('profile',[ProfileController::class,'update'])->name('profile.update');


 Route::post('/createcourse',[CreateCourseController::class,'store'])->name('create.create');


 Route::get('/createcourse',[CreateCourseController::class,'show'])->name('create');


Route::post('logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/signup',[RegisterController::class,'index'])->name('signup');
Route::post('/signup',[RegisterController::class,'store']);


Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
