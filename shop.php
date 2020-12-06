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

	<!-- Header section -->
		<!-- Header section -->

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
	
	
		<header class="header-section">
			<a href="index.html" class="site-logo">
				<img src="img/logos-01.png" alt="" height="60">
			</a>
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="classes.html">Classes</a></li>
				<li><a href="shop.html" class="active">Shop</a></li>
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
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/3.jpg">
		<div class="container">
			<h2>Shop</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!--Search bar-->
	<div class="container custom-padding">
		<!-- Search form -->
		<div class="row d-flex justify-content-center">
			<div class="input-group w-75">
				<input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
				<div class="input-group-append">
				  <button class="btn btn-outline-secondary" type="button">Search</button>
				</div>
			</div>
		</div>
	
	</div>

	<!--items-->
	<div class="container my-4">
		<div class="row">
			<div class="col-md-2">
				<div class="h3">Catogery</div>
				<hr class="mt-4"/>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Protein</label>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck2">Gloves</label>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck3">Belt</label>
				</div>
				
			</div>
			<div class="col-md-10">
				<div class="row mt-1">
					<div class="col-md-4">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							  <label class="input-group-text" for="inputGroupSelect01">Sort by price</label>
							</div>
							<select class="custom-select" id="inputGroupSelect01">
							  <option selected>Best Match</option>
							  <option value="1">High to low</option>
							  <option value="2">Low to high</option>
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							  <label class="input-group-text" for="inputGroupSelect01">Sort by Rating</label>
							</div>
							<select class="custom-select" id="inputGroupSelect01">
							  <option selected>Best Match</option>
							  <option value="1">High to low</option>
							  <option value="2">Low to high</option>
							</select>
						</div>
					</div>
				</div>
				<hr class="my-0"/>
				<!--Products starts here-->
				<div class="row my-4">
					<div class="col-md-4">
						<figure class="card card-product">
							<div class="img-wrap"><img src="https://foodpharmacy.blog/img-jpg/musclepharm-combat-protein-powder-cookies-n-cream-5-lbs-2275-g.jpg"></div>
							<figcaption class="info-wrap">
									<h4 class="title">Whey Combat</h4>
									<p class="desc">Mass Gainer protein</p>
									<div class="rating-wrap">
										<div class="label-rating">132 reviews</div>
										<div class="label-rating">154 orders </div>
									</div> <!-- rating-wrap.// -->
							</figcaption>
							<div class="bottom-wrap">
								<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
								<div class="price-wrap h5">
									<span class="price-new">$1280</span> <del class="price-old">$1980</del>
								</div> <!-- price-wrap.// -->
							</div> <!-- bottom-wrap.// -->
						</figure>
					</div> <!-- col // -->

					<div class="col-md-4">
						<figure class="card card-product">
							<div class="img-wrap"><img src="https://foodpharmacy.blog/img-jpg/musclepharm-combat-protein-powder-cookies-n-cream-5-lbs-2275-g.jpg"> </div>
							<figcaption class="info-wrap">
									<h4 class="title">Power Combat</h4>
									<p class="desc">Pre Workout</p>
									<div class="rating-wrap">
										<div class="label-rating">132 reviews</div>
										<div class="label-rating">154 orders </div>
									</div> <!-- rating-wrap.// -->
							</figcaption>
							<div class="bottom-wrap">
									<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
									<div class="price-wrap h5">
										<span class="price-new">$1280</span> <del class="price-old">$1980</del>
									</div> <!-- price-wrap.// -->
							</div> <!-- bottom-wrap.// -->
						</figure>
					</div> <!-- col // -->

					<div class="col-md-4">
						<figure class="card card-product">
							<div class="img-wrap"><img src="https://m.media-amazon.com/images/I/41h5OXjHBnL.jpg"></div>
							<figcaption class="info-wrap">
									<h4 class="title">Whey Steel</h4>
									<p class="desc">Post Workout</p>
									<div class="rating-wrap">
										<div class="label-rating">132 reviews</div>
										<div class="label-rating">154 orders </div>
									</div> <!-- rating-wrap.// -->
							</figcaption>
							<div class="bottom-wrap">
									<a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
									<div class="price-wrap h5">
										<span class="price-new">$1280</span> <del class="price-old">$1980</del>
									</div> <!-- price-wrap.// -->
							</div> <!-- bottom-wrap.// -->
						</figure>
					</div> <!-- col // -->
				</div> <!-- row.// -->
			</div>	
			
		</div>
	</div>





	<!-- Footer section -->
	
	<?php include 'includes/footer.php'; ?>	
	<?php include 'includes/importjs.php'; ?>								

	</body>
</html>
