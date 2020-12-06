<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
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
				<li><a href="shop.html">Shop</a></li>
				<li><a class="active" href="blog.html">Blog</a></li>
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
			<h2>Blog</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Blog section -->
	<section class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-item">
						<img src="img/blog/1.jpg" alt="">
						<h2>5 Exercises for a six pack</h2>
						<div class="blog-metas">
							<div class="blog-meta"><img src="img/icons/edit.png" alt=""> By Admin</div>
							<div class="blog-meta"><img src="img/icons/layout.png" alt="">in Workout</div>
							<div class="blog-meta"><img src="img/icons/profile.png" alt="">2 comments</div>
						</div>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
						<div class="site-btn">Read More</div>
					</div>
					<div class="blog-item">
						<img src="img/blog/2.jpg" alt="">
						<h2>Do you want strong arms? Here’s our tips</h2>
						<div class="blog-metas">
							<div class="blog-meta"><img src="img/icons/edit.png" alt=""> By Admin</div>
							<div class="blog-meta"><img src="img/icons/layout.png" alt="">in Workout</div>
							<div class="blog-meta"><img src="img/icons/profile.png" alt="">2 comments</div>
						</div>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
						<div class="site-btn">Read More</div>
					</div>
					<div class="blog-item">
						<img src="img/blog/3.jpg" alt="">
						<h2>Fitness Competition for begginers</h2>
						<div class="blog-metas">
							<div class="blog-meta"><img src="img/icons/edit.png" alt=""> By Admin</div>
							<div class="blog-meta"><img src="img/icons/layout.png" alt="">in Workout</div>
							<div class="blog-meta"><img src="img/icons/profile.png" alt="">2 comments</div>
						</div>
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
						<div class="site-btn">Read More</div>
					</div>
					<div class="site-pagination">
						<a href="" class="active">01</a>
						<a href="">02</a>
						<a href="">03</a>
						<a href="">04</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-7 col-sm-9 sidebar">
					<div class="widget-area">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><img src="img/icons/search.png" alt=""></button>
						</form>
					</div>
					<div class="widget-area">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="">Body Building<span>5</span></a></li>
							<li><a href="">Nutritions Tips<span>7</span></a></li>
							<li><a href="">Pillates & Yoga<span>9</span></a></li>
							<li><a href="">Events & Competitions<span>10</span></a></li>
							<li><a href="">Workout<span>15</span></a></li>
							<li><a href="">Fitness<span>8</span></a></li>
							<li><a href="">Wellness Treatments<span>6</span></a></li>
							<li><a href="">Uncategorized<span>47</span></a></li>
						</ul>
					</div>
					<div class="widget-area">
						<h2 class="widget-title">Recent Posts</h2>
						<div class="recent-post-widget">
							<div class="rp-item">
								<img src="img/blog/blog-widget/1.jpg" alt="">
								<div class="rp-text">
									<p>Lorem ipsum dolor sit amet, consectetur.</p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="img/blog/blog-widget/2.jpg" alt="">
								<div class="rp-text">
									<p>Consectetur lorem ipsum dolor sit amet.</p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
							<div class="rp-item">
								<img src="img/blog/blog-widget/3.jpg" alt="">
								<div class="rp-text">
									<p>Ipsum dolor sit amet, consectetur. </p>
									<div class="rp-date">February 17, 2019</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-area">
						<h2 class="widget-title">Tags</h2>
						<div class="tags-widget">
							<a href="#">sport</a>
							<a href="#">fitness</a>
							<a href="#">wheight lifting</a>
							<a href="#">nutrition</a>
							<a href="#">tips</a>
							<a href="#">fitted</a>
							<a href="#">abs</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->



	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/importjs.php'; ?>								


	</body>
</html>
