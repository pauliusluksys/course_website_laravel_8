@extends('layouts.app')
@section('content')

<h1>here you will be able to see your courses</h1>

<div>
	@foreach($userSelectedCourses as $userSelectedCourse)
		<div>
			<h4>{{$userSelectedCourse->title}}</h4>
			<h4>{{$userSelectedCourse->description}}</h4>
			<h4>{{$userSelectedCourse->creator}}</h4>
		</div>

	@endforeach
</div>


@endsection