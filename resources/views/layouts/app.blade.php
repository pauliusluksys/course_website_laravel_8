<!doctype html>
 <html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="{{  asset('css/custom.css') }}">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"  type="text/css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
  <body>
  	<header>
      

      @if (auth()->user())

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid d-flex flex-row">
    
      
    <a class="navbar-brand" href="/">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/myCourses">My Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('create') }}">Create a Course</a>
        </li>
        
      </ul>
    
      <div class="flex-grow-1"></div>
      <div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.index') }}">Profile</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post" >
          @csrf
          <button class="btn nav-link" type="submit">Logout</button>
        </form>
            
          </li>
        </ul>
      
    </div>
  </div>
</div>


</nav>
  		
      @endif
  	</header>

	@yield('content') 

  <footer></footer> 	
@yield('footer-scripts')


  </body>

  </html>