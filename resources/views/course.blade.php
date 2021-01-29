@extends('layouts.app')
@section('content')
	
	<div class="container">
		@error('userHasCourse')
   			 <div class="alert alert-danger">{{ $message }}</div>
			@enderror
		<div class="row">
			
			<div class="col-1"></div>
			<div class="col-10 bg-dark text-light">
				<div class="">developement>me</div>
				<div style="height: 400px;background-color: white;"></div>
				<div class=""><h1>{{ $course[0]->title }}</h1></div>
				<div class=""><h4>Rating</h4></div>
				<div class=""><h5>Created by: {{ $course[0]->creator }}</h5></div>
				<div class=""><h5>Last Updated: {{ $course[0]->updated_at }}</h5></div>
				<div class=""><h5>Price</h5></div>

				<form action="{{ route('userCourse.store') }}" method="POST">
					@csrf
					 
					<input type="hidden" id="course_id" name="course_id" value="{{$course[0]->id}}">
				<div class="">
					<button><h5>get it now!</h5></button>
				</div>

				</form>

				<div class=""><h5>What you will learn:</h5></div>
				<div class=""><h5>Requirements:</h5></div>
				<div class=""><h5>Description: {{ $course[0]->description }}</h5></div>
			</div>
			<div class="col-1"></div>
		</div>


	</div>



@endsection