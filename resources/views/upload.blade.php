@extends('layouts.app')
@section('content')
<div class="container">
<div class="container py-5">

  
    

    <div class="row py-4">
        <div class="col-lg-6 mx-auto">

        	<img src="{{ Auth::user()->getMedia('avatars')->first()->getUrl('thumb') }}">
        	
            <!-- Upload image input-->
           <form action="{{ route('profileUpload') }}" method="POST" role="form" enctype="multipart/form-data">
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
</div>
	

    </div>



<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/profilePicture-js.js')}}" type="text/javascript"></script>
   @endsection