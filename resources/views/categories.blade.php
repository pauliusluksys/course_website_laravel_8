@extends('layouts.app')
@section('content')
	
<div class=" d-flex container mx-auto flex-row w-100 p-3 justify-content-center">
  <div class="d-flex flex-row flex-wrap justify-content-center">
  	

  	@foreach($categories as $category)
  		<div class="mx-4 my-4 p-2 border border-dark d-flex align-items-center flex-column" style="width: 200px; height: 240px">
  			<div class="my-2 border border-dark" style="position:relative; width: 100%; height: 110px;"></div>
			<div class="my-2 d-flex justify-content-center" style="height: 40px;"><p class="lh-sm text-center mb-0 ">{{$category->id}}.{{$category->name}}
			</p></div>
			<div><a class="btn btn-primary" href="categories/{{ $category->slug }}" role="button">	Go To Category </a>
			</div>
  		</div>
  	@endforeach

    
  </div>
</div>
	
@endsection