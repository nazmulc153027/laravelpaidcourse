@extends('layout.app')
@section('title','Home');


@section('content')

<div class="container-fluid parallax mb-5">

	<div class="row d-flex justify-content-center">
		<div class="col-md-4 top text-white">
			<h1>SOFTWARE ENGINEER</h1>
			<h3>MOBILE APPLICATIONS</h3>
		</div>
	</div>
</div>


<div class="container">
	<h1 class="text-center">Our Services</h1><br><br>
	<div class="row mt-2">
		 <div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/456.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <button type="submit" class="btn btn-primary btn-block">Learn More</button>
			  </div>

            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/boots.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <button type="submit" class="btn btn-primary btn-block">Learn More</button>
			  </div>
            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/bootstrap.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <button type="submit" class="btn btn-primary btn-block">Learn More</button>
			  </div>
            </div>
		</div>	
	</div>
</div>



<div class="container mt-5">
	<h1 class="text-center">Recent Work</h1><br><br>
	<div class="row">
		 <div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/bulb.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/react.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>
		<div class="col-md-4 p-1">
			<div class="card" style="width:100%">
			  <img src="{{asset('images/wordpress.jpg')}}" class="card-img-top" alt="">
			  <div class="card-body">
			    <h5 class="card-title">Our Services</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
            </div>
		</div>	
	</div>
</div>


<div class="container mt-5">
	<h1 class="text-center">Contact With Me</h1><br><br>
	<div class="row mb-4">
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.396436152967!2d91.8291428147883!3d22.376407685284075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd87f50f89171%3A0x9b4e66fca5275568!2z4Kaw4Ka54Kau4Ka-4Kao4Ka_4Kef4Ka-IOCmieCmmuCnjeCmmiDgpqzgpr_gpqbgp43gpq_gpr7gprLgp58!5e0!3m2!1sbn!2sbd!4v1638971197886!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</div>

@endsection