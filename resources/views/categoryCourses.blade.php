@extends('layouts.app')
@section('content')
	
<div class="container mx-auto flex-row">
  <div class="d-flex w-4/5 border-black border-2 flex-row flex-wrap justify-evenly p-4">
  	
  	

  	
  	
 

      @foreach($categoryCourses1 as $course)
      
      <div class="border border-primary mx-2 my-5" >
        <a href="/course/{{ $course->slug }}">
          <div class=" d-flex flex-column justify-content-between pb-4" style="width: 200px; height: 240px;">
          <div class="border border-primary w-100 text-center" style="height: 132px;">
          
          </div>
            <div class="mx-2">
              <div class="overflow-hidden" style="height:50px;">{{ $course->title }}
              </div>
              <div>{{$course->creator}}</div>
              <div>Review</div>
              <div>Price</div>
            </div>
          </div>
        </a>
      </div>
      
      @endforeach
    
 </div>
</div>
	
@endsection