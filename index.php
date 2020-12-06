<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='home';
	include 'includes/import.php'; ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header incude -->
	<?php include 'includes/header.php'; ?>	



	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
		<div class="container">
			<div class="hero-text">
				<h2>Shape Your</h2>
				<h2>Body <span>With Us!</span></h2>
				<a href="contact.html" class="site-btn">Join the Gym</a>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Feature section -->
	<section class="feature-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>The real <span>workout</span> starts when you want to stop. </h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>POSITIVITY</h4>
						<p>We are nurturers: we seek only to encourage, entertain, and empower.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-031-app-1"></i>
						</div>
						<h4>INCLUSIVITY</h4>
						<p>Here we keep open minds. There is no one type or way in our diverse community. Come as you are!</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-010-podium"></i>
						</div>
						<h4>FUN</h4>
						<p>We know serious fitness is hard, but that doesn’t mean it can’t be an edge-of-your-seat, can’t-get-enough, look-forward-to-your-workouts party. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->

	<!-- Add section -->
	<section class="add-section set-bg" data-setbg="img/add-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="add-text">
						<h2>We have the following <span>Package</span></h2>
						<ul>
							<li><img src="img/check-icon.png" alt="">GYM and Cardio</li>
							<li><img src="img/check-icon.png" alt="">Cardio and Zumba</li>
							<li><img src="img/check-icon.png" alt="">Zumba and GYM</li>
						</ul>
						<a href="#" class="site-btn">Become a Member</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->

	<!-- Milestones section -->
	<section class="milestones-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>1000</h2>
						<p>Happy Clients</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>700</h2>
						<p>Strong Bodies</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>10k</h2>
						<p>FB Followers</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone">
						<h2>24/7</h2>
						<p>Working Hours</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Milestones section end -->

	<!-- Banner -->
	<div class="container my-5">
		<div class="row mb-5">
			<a href="vitamins.php"><img src="img/banner/vitamins.jpg" alt=""></a> 
		</div>
		<div class="row mb-5">
			<a href="mass.php"><img src="img/banner/mass.jpg" alt=""></a> 
		</div>
		<div class="row mb-5">
			<a href="fatburn.php"><img src="img/banner/fat.jpg" alt=""></a> 
		</div>
	</div>


	<!-- BMI section -->
	<section class="bmi-section spad">
		<div class="bmi-bg set-bg" data-setbg="img/bmi-bg.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 ml-auto">
					<div class="section-title mb-0">
						<h2>Calculate your <span>BMI</span></h2>
						<p>Body mass index is a value derived from the mass and height of a person. The BMI is defined as the body mass divided by the square of the body height, and is universally expressed in units of kg/m², resulting from mass in kilograms and height in metres</p>
					</div>
					<div class="bmi-calculator-warp">
						<div class="bmi-calculator">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Weight (KG)" id="bmi-weight">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Hight (M)" id="bmi-hight">
								</div>
								<div class="col-sm-6">
									<button class="site-btn" id="bmi-submit">Calculate</button>
								</div>
								<div class="col-sm-6">
									<input type="text" id="bmi-result" readonly>
								</div>
							</div>
							<p>Check your BMI and understand your result</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BMI section end -->

	<!-- Footer section -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/importjs.php'; ?>								


	</body>
</html>
