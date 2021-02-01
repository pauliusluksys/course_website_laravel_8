@extends('layouts.app')
@section('content')



<div class="container-fluid px-0">
  <div class="row">
  	<div class="col-md">
<div style="display:flex; width: 200px; margin-top: 30px;">
<div class="list-group">
		<a href="{{route('profileUpload')}}" class="list-group-item list-group-item-action" aria-current="true">
    Profile Information
  </a>
  <a href="{{route('upload')}}" class="list-group-item list-group-item-action  active">Picture</a>
</div>
</div>
  	</div>
  	<div class="col-md">
<div class="d-flex align-items-center flex-column ">
	<img src="https://static.toiimg.com/thumb/72975551.cms?width=680&height=512&imgsize=881753" class="rounded-circle my-2" alt="..." style="width: 100px; height: 100px;">

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
<div class="col-md">

<div class="container py-5">

    <!-- For demo purpose -->
    <header class="text-white text-center">
        <h1 class="display-4">Bootstrap image upload</h1>
        <p class="lead mb-0">Build a simple image upload button using Bootstrap 4.</p>
        <p class="mb-5 font-weight-light">Snippet by
            <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u>
            </a>
        </p>
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
    </header>


    <div class="row py-4">
        <div class="col-lg-6 mx-auto">

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

        </div>
    </div>
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/profilePicture-script.js')}}" type="text/javascript"></script>

@endsection