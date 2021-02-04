@extends('layouts.app')
@section('content')
	 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div>
	
	<div class="container mb-5">
  	<h4>My courses</h4>
  
  <div class="row myCoursesGap" style="margin-right: -10px;margin-left:-10px;">
  	@foreach($userCourses as $userCourse)
    <div class="col d-flex border p-0 " style="height: 150px; "  >
      <div style="width: 120px;" class="flex-shrink-0">Picture here</div>
      <div class="flex-shrink-1 p-3 overflow-hidden">
      	ID={{ $userCourse->id}}<br>
      	{{ $userCourse->title}}<br>
      	{{ $userCourse->description}}

      </div>
    </div>
    

    
    
    @endforeach

  </div>
  @if (count($userCourses) === 0)

    <p>It seems you don't have any courses yet. <a href="{{ route('categories') }}">Press here to start chosing.</a></p>


	
	@else
	<div class="d-flex mt-2 mr-2"> <div class="flex-grow-1"></div>
  <div ><a class="btn btn-primary" href="/myCourses" role="button">Go to all of my courses </a></div></div>
  	

  @endif
	<div><h4> Other courses that you might like:</h4></div>
	<div class="row myCoursesGap" style="margin-right: -10px;margin-left:-10px;">
	@foreach($notSelectedCourses as $notSelectedCourse)
	
    <div class="col d-flex border p-0 " style="height: 150px; "  >
      <div style="width: 120px;" class="flex-shrink-0">Picture here</div>
      <div class="flex-shrink-1 p-3 overflow-hidden">
      	<p>{{$notSelectedCourse->title}}</p>
      	<p>ID={{$notSelectedCourse->id}}</p>
      </div>
    </div>

    @endforeach
    

  </div>

  <div><h4> Popular Categories:</h4></div>
  <div class="row myCoursesGap d-flex justify-content-center" style="margin-right: -10px;margin-left:-10px;">
    @foreach($categories as $category)
  	<a class=" mx-2 btn btn-outline-secondary hover-white-text" role="button" href="categories/{{$category->slug}}">{{$category->name}}</a>
  	@endforeach


  </div>
</div>

@endsection