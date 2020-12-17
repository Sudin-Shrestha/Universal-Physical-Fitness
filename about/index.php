<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='about';
	include '../includes/import.php'; ?>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include '../includes/header.php'; ?>	

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/1.jpg">
		<div class="container">
			<h2>About us</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- About section -->
	<section class="about-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-5">
					<div class="section-title text-center">
						<h2><span>We care</span> about your health</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="about-text">
						<p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula frin-gilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobor-tis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about-text">
						<p>Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, onec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about-img">
						<img src="../img/about-img.png" alt="">
					</div>
				</div>
			</div>
			<div class="text-center pt-4">
				<a href="#" class="site-btn">Become a Member</a>
			</div>
		</div>
	</section>
	<!-- About section end -->

	<!-- Achievement section -->
	<div class="achievement-section set-bg" data-setbg="../img/achievement-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress" data-cptitle="Happy Clients" data-cpid="id-1" data-cpvalue="50" data-cpcolor="#fcff18"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress" data-cptitle="Fatt Lost" data-cpid="id-2" data-cpvalue="75" data-cpcolor="#fcff18"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress" data-cptitle="Work" data-cpid="id-3" data-cpvalue="100" data-cpcolor="#fcff18"></div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle-progress" data-cptitle="Energy" data-cpid="id-4" data-cpvalue="25" data-cpcolor="#fcff18"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Achievement section end -->

	<!-- Trainers section -->
	<section class="trainers-section">
		<div class="container">
			<div class="section-title text-center">
				<h2>Meet the <span>Trainers</span></h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="../img/trainers/1.jpg" alt="">
						</div>
						<h4>Michael Smith</h4>
						<p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="../img/trainers/2.jpg" alt="">
						</div>
						<h4>Jessica Black</h4>
						<p>Ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="../img/trainers/3.jpg" alt="">
						</div>
						<h4>James Brown</h4>
						<p>Libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien.</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="trainer-item">
						<div class="trainer-pic">
							<img src="../img/trainers/4.jpg" alt="">
						</div>
						<h4>Paula Carlton</h4>
						<p>Sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermen-tum ornare.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers section end -->

	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								

												

	</body>
</html>
