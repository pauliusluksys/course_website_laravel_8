@extends('layouts.app')
@section('content')
	
<div class="container mx-auto flex-row">
  <div class="flex w-4/5 border-black border-2 flex-row flex-wrap justify-evenly p-4">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  	<form method="POST" action="{{ route('create.create') }}">
  		 @csrf
  		<div class="mb-3">
    <label for="title" class="form-label">Title Of The Course:</label>
    <input type="text" class="form-control" id="title" name="title">
    
  </div>
  <div class="mb-3">
    <label for="level" class="form-label">Course is dedicated for:</label><br>
    <select class="form-select" aria-label="Default select example" id="level" name="level">
      @foreach($levels as $level)
        <option value="{{$level->id}}">{{$level->name}}</option>
        
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Course Category Is:</label><br>
    <select class="form-select" aria-label="Default select example" id="category" name="category">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="time_to_complete" class="form-label">Time To Complete:</label>
  <input type="text" class="form-control" id="time_to_complete" name="time_to_complete" name="time_to_complete">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description Of The Course:</label>
    <textarea class="form-control" id="description"aria-label="With textarea" name="description">  </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  	</form>
  </div>
</div>
 @endsection