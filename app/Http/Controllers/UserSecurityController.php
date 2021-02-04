<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserSecurityController extends Controller
{
    public function __construct()
{
		$this->middleware('auth')->except('upload');
}

public function index(){

	$id=Auth::id();
	
	$emailVerified=User::find($id)->email_verified_at;
	
	return view('userSecurity',compact('emailVerified'));



	}


}
