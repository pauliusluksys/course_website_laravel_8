@extends('layouts.app')
@section('content')



<div class="container-fluid px-0">
  <div class="row">
  	<div class="col-md">
<div style="display:flex; width: 200px; margin-top: 30px;">
<div class="list-group">
		<a href="/profile" class="list-group-item list-group-item-action active" aria-current="true">
    Profile Information
  </a>
  <a href="{{route('upload')}}" class="list-group-item list-group-item-action">Picture</a>
  <a href="profile/security" class="list-group-item list-group-item-action">Security Settings</a>
</div>
</div>
  	</div>
  	<div class="col-md">
<div class="d-flex justify-content-center">
<form  action="{{ route('profile.update') }}" method="POST">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@csrf
	<div>
		<label for="username">Username</label>
	</div>
	<div><input class="form-control form-control-lg" type="text" name="username" value="{{$user[0]->username}}" id="username"></div>

	<div><label for="headline">Headline</label></div>

	<div><input class="form-control form-control-lg" type="text" name="headline" value="{{$user[0]->ocupation}}" id="headline"></div>

	<div><label for="description">Description</label></div>

	<div><textarea  class="form-control " type="text" name="description" id="description" rows="7">{{$user[0]->description}}
	</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<div class="col-md">



</div>
</div>


@endsection