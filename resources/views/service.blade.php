@extends('layout.app')
@section('title','service');


@section('content')

<div class="container-fluid bg-dark text-white p-5 mb-5">
	<h1 class="text-center">SERVICES</h1>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/456.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/boots.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/bootstrap.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>	
	</div>
</div>

<div class="container mt-4 mb-4">
	<div class="row">
		<div class="col-md-6">
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Number</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your number">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Message</label>
			   <textarea type="text" class="form-control" placeholder="Your message"></textarea>
			  </div><br>

			   <button type="submit" class="btn btn-warning btn-block w-75">Send Now</button>
           </form>	
		</div>


		<div class="col-md-6">
			<h3>Address</h3>
			<p>Panchlaish,Muradpur,Hamjerbag,Rahmania School,Chattogram</p>
			<p>Cell:+8801721376870</p>
			<p>Email Address:nazmulhuda273@gmail.com</p>
		</div>
	</div>
</div>


@endsection