@extends('layouts.app')
@section('content')



<div class="container-fluid px-0">
  <div class="row">
  	<div class="col-md">
<div style="display:flex; width: 200px; margin-top: 30px;">
<div class="list-group">
		<a href="/profile" class="list-group-item list-group-item-action" >
    Profile Information
  </a>
  <a href="{{route('upload')}}" class="list-group-item list-group-item-action">Picture</a>

<a href="/profile/security" class="list-group-item list-group-item-action active">Security Settings</a>
</div>
</div>
  	</div>
  	<div class="col-md">
<div class="d-flex justify-content-center">

</div>
</div>
<div class="col-md">
  @isset($emailVerified)
    <h5>Your email is verified.</h5>
@endisset
@empty($emailVerified)
    <h5>Your email is NOT verified <a href="/email/verify">Go here to verify</a></h5>
@endempty


</div>
</div>


@endsection