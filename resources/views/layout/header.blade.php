<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=""><img class="image" src="{{asset('images/logo.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/about')}}">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/service')}}">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/portfolio')}}">PORTFOLIO</a>
      </li>
    </ul>
  </div>
</nav>