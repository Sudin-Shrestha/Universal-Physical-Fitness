<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="Universal Physical Fitness">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	$PAGENAME='contact';
	include '../includes/import.php'; ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php 
	
	include '../includes/header.php'; ?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/4.jpg">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>
	<!-- Page top section end -->

	<?php
		$details = json_decode(
			file_get_contents('http://localhost/fitness/api/view/gymdetail'),
			TRUE
		);
		foreach($details as $detail){
			echo '
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2 class="contact-title">Contact Info</h2>
					<div class="contact-info-warp">
						<h4>Location</h4>
						<div class="contact-info">
							<img src="img/icons/1-dark.png" alt="">
							<div class="cf-text">
								<p>'.$detail['gymLocation'].'</p>
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>Contact</h4>
						<div class="contact-info">
							<img src="img/icons/2-dark.png" alt="">
							<div class="cf-text">
								<p>+977 '.$detail['gymPhone1'].'</p>
								<p>+977 '.$detail['gymPhone2'].'</p>
								
							</div>
						</div>
					</div>
					<div class="contact-info-warp">
						<h4>E-mail</h4>
						<div class="contact-info">
							<img src="img/icons/3-dark.png" alt="">
							<div class="cf-text">
								<p>'.$detail['gymEmail'].'</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<h2 class="contact-title">Get in touch</h2>
					<form class="contact-form" action="../controller/queries.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" placeholder="Your name" required>
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" placeholder="Your phone number" required>
							</div>
							<div class="col-md-12">
								<input type="text" name="email" placeholder="Email">
								<textarea name="subject" placeholder="Subject Message"></textarea>
								<button class="site-btn" type="submit" id="sendQuery" name="sendQuery">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->
	';
		 } ?>

	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								

	</body>
</html>
