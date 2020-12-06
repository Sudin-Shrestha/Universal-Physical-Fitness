<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include 'includes/import.php'; ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="row bg-light p-2 mx-0">
		<div class="col-md-5">
			Get Variety of GYM prodcuts and Supplements. 
			<a href="#" class="text-warning mx-2">Order Now
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
				</svg>
			</a>
		</div>
		<div class="col-md-7 text-right">
			<!-- <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</button>
			<button type="button" class="btn btn-warning btn-sm float-right mr-2" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</button> -->
			<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#login" data-whatever="@mdo">Login</a>
			<a href="" class="mx-2 text-dark font-weight-bold" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Signup</a>
			<a href="" class="mx-2 text-dark font-weight-bold">Check Out</a>
		</div>
	</div>

	<!--lOGIN modal-->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong class="my-3 h4">Welcome Please login to Continue</strong>
				<p>New Member? <a href="" data-toggle="modal" data-target="#signup" data-whatever="@mdo">Register</a> </p>
				<form>
					<div class="form-group">		
						<label for="email" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password:</label>
						<input type="password" class="form-control pwd" id="password"> 	
					</div>
					<P><input type="checkbox" aria-label="Checkbox for following text input" class="mr-2">Remember me <a href="" class="float-right">Forgot Password?</a></P>
					
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-warning">Login</button>
			</div>
		  </div>
		</div>
	</div>

	
	<!--signup modal-->
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Signup</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<strong class="my-3 h4">Welcome Please Signup to Continue</strong>
				<p>Already Have an account the please login</p>
				<form>
					<div class="form-group">
						<label for="name" class="col-form-label">Full Name:</label>
						<input type="text" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="emailadd" class="col-form-label">Email:</label>
						<input type="email" class="form-control" id="emailadd">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Confirm Password:</label>
						<input type="password" class="form-control" id="password">
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-warning">Signup</button>
			</div>
		  </div>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logos-01.png" alt="" height="60">
		</a>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a class="active" href="classes.html">Classes</a></li>
			<li><a href="shop.html">Shop</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li class="header-right">
				<div class="hr-box">
					<img src="img/location-icon.png" alt="">
					<h6>Koteshor, Kathmandu Nepal</h6>
				</div>
			</li>
		</ul>
	</header>
	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/2.jpg">
		<div class="container">
			<h2>Classes</h2>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Service section -->
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-050-weightlifting"></i>
						</div>
						<h4>Bodybuilding</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-045-fitness"></i>
						</div>
						<h4>Finess</h4>
						<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-033-pump"></i>
						</div>
						<h4>Aerobics</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est. Donec tempor felis at nibh eleifend malesuada.  </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-017-weightlifting-1"></i>
						</div>
						<h4>Pilates</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>Wheight Lifting</h4>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-038-vitamins"></i>
						</div>
						<h4>Nutrition</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est. Donec tempor felis at nibh eleifend malesuada. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->

	<!-- Pricing section end -->
	<section class="pricing-section set-bg" data-setbg="img/pricing-bg.jpg">
		<div class="container">
			<div class="section-title text-white text-center">
				<h2>Prices for <span>everybody</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$10</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li><span></span></li>
							<li><span></span></li>
							<li><span></span></li>
						</ul>
						<a href="#" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$25</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li><span></span></li>
							<li><span></span></li>
						</ul>
						<a href="#" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$45</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li>Personal Trainer</li>
							<li>Massage</li>
						</ul>
						<a href="#" class="site-btn">Choose Plan</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-box">
						<h2>$60</h2>
						<p>/month</p>
						<ul>
							<li>Gym</li>
							<li>Fitness 24/7</li>
							<li>Sauna</li>
							<li>Personal Trainer</li>
							<li>Massage</li>
							<li>Dietician</li>
						</ul>
						<a href="#" class="site-btn">Choose Plan</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing section  -->

	<!-- Classes section -->
	<section class="classes-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title">
					<h2>Do you need a <span>Personal Trainer?</span><br> Get in touch with us now. </h2>
				</div>
				</div>
				<div class="col-lg-6">
					<div class="classes-text">
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
						<a href="#" class="site-btn">Send us a message</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->

	<!--Youtube video-->
	<div class="container my-4">
		<div class="row d-flex justify-content-center">
			<div class="section-title">
				<h2>Want to See how we <span>Workout?</span></h2>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<iframe width="800" height="500" src="https://www.youtube.com/embed/VFP9MlKHy7M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>


	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/importjs.php'; ?>								

	</body>
</html>
