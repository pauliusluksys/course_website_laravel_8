@extends('layouts.app')
@section('content')



<div class="container-fluid px-0">
  <div class="row">
  	<div class="col-md">
<div style="display:flex; width: 200px; margin-top: 30px;">
<div class="list-group">
		<a href="/profile" class="list-group-item list-group-item-action" aria-current="true">
    Profile Information
  </a>
  <a href="" class="list-group-item list-group-item-action  active">Picture</a>
  <a href="/profile/security" class="list-group-item list-group-item-action">Security Settings</a>
</div>
</div>
  	</div>
  	<div class="col-md">
<div class="d-flex align-items-center flex-column ">
	<img src="{{asset("$fullPathOnDisk")}}" class="rounded-circle my-2" alt="..." style="width: 100px; height: 100px;">

<form action="{{route('upload')}}" method="POST" role="form" enctype="multipart/form-data">
	<div class="d-flex align-items-center flex-column " >
	   @csrf

		<input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
		    @error('file')
		        <span class="invalid-feedback" role="alert">
		            <strong>{{ $message }}</strong>
		        </span>
		    @enderror


		    <button type="submit" class="btn btn-primary my-2">Upload File</button>

		</div>
	 </form>
</div>
</div>
<div class="col-md">


</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/profilePicture-script.js')}}" type="text/javascript"></script>

@endsection