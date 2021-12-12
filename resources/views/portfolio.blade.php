@extends('layout.app')
@section('title','Portfolio');


@section('content')

<div class="container-fluid bg-dark text-white p-5 mb-5">
	<h1 class="text-center">PORTFOLIO</h1>
</div>

<div class="container-fluid mb-4">
	<div class="row">
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/456.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/boots.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/bootstrap.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/cms.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/react.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/tailwind.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/wordpress.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
		<div class="col-md-3 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/456.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
            </div>
		</div>
	</div>
</div>

@endsection