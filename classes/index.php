<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
	$PAGENAME='classes';
	include '../includes/import.php'; ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php include '../includes/header.php'; ?>

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/2.jpg">
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
	<section class="pricing-section set-bg" data-setbg="../img/pricing-bg.jpg">
		<div class="container">
			<div class="section-title text-white text-center">
				<h2>Prices for <span>everybody</span></h2>
			</div>
			<div class="row">
			<?php  $classes = json_decode(
						file_get_contents('http://localhost/fitness/api/classes/all'),
						TRUE
					); 
					foreach($classes as $class){
						echo '
						<div class="col-lg-3 col-sm-6">
						<div class="pricing-box">
							<h2>Rs '.$class['price'].'</h2>
							<p>'.$class['duration'].'</p>
							<ul>
								<li>'.$class['feature_1'].'</li>
								<li>'.$class['feature_2'].'</li>
								<li>'.$class['feature_3'].'</li>
								<li>'.$class['feature_4'].'</li>
								<li>'.$class['feature_5'].'</li>
							</ul>
							<a href="#"  data-toggle="modal" data-target="#editModal'.$class['id'].'" class="site-btn">Choose Plan</a>
						</div>
					</div>

					<div class="modal fade" id="editModal'.$class['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-light">
                          <h5 class="modal-title" id="exampleModalLabel">Description of package</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="../controller/packageChooser.php"  method="POST">
							<div class="row">
								<div class="col-md-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
									<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
									<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
									</svg> '.$class['duration'].'
								</div>
								<div class="col-md-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
								<path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
								<path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
								</svg> Rs. '.$class['price'].'
								</div>
							</div>

							<div class="form-row mt-4">
								<div class="form-group col-md-12">
									<label class="font-weight-bold" for="name">Your full Name</label>
									<input type="text" class="form-control" id="chooserName" name="chooserName" placeholder="Your full name" required>
								</div>
							</div>
							<div class="form-row mt-3">
								<div class="form-group col-md-12">
									<label class="font-weight-bold" for="phone">Your phone number</label>
									<input type="number" class="form-control" id="chooserPhone" name="chooserPhone" placeholder="Your phone" required>
								</div>
							</div>
							<small>*if you have more queries please head to contact section</small>
                          </div>
                          <div class="modal-footer bg-light">
                    
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="hidden" name="package_id" value="'.$class['id'].'">
                          <button type="submit" class="btn btn-primary" name="packageChooser" value="save">Send Details</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
						';

					}

					
					
					?>
			
			
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
						<a href="../contact" class="site-btn">Send us a message</a>
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
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								

	</body>
</html>
