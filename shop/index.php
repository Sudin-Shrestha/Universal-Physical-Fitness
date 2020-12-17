<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='shop';
	include '../includes/import.php'; ?>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include '../includes/header.php'; ?>

		

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="../img/header-bg/3.jpg">
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
	
	<?php include '../includes/footer.php'; ?>	
	<?php include '../includes/importjs.php'; ?>								

	</body>
</html>
