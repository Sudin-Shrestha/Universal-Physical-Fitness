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
						<form class="search-widget w-50">
							<input type="text" placeholder="Search" aria-label="search" aria-describedby="basic-addon2" id="product-search">
							<button><img src="../img/icons/search.png" alt=""></button>
						</form>
			<!-- <div class="input-group w-50">
				<input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2" id="product-search">
				<div class="input-group-append">
				  <button class="btn btn-outline-secondary" type="button">Search</button>
				</div>
			</div> -->
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
							<select class="custom-select" id="selected-price">
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
					<?php  $products = json_decode(
						file_get_contents('http://localhost/fitness/api/product/all'),
						TRUE
					);
					foreach($products as $product){
						echo '
						<div class="col-md-4" data-product-col="'.$product['name'].'" data-price-col="'.$product['price'].'">
							<figure class="card card-product">
								<div class="img-wrap"><img src="http://localhost/fitness/api/storage/'.$product['image'].'"></div>
								<figcaption class="info-wrap">
										<h4 class="title">'.$product['name'].'</h4>
										<p class="desc">Brand: <span class="text-primary"> '.$product['brand'].' </span></p>
								</figcaption>
								<div class="bottom-wrap">
									<a href="../product/?id='.$product['id'].'" class="btn btn-sm btn-info float-right">Order Now</a>	
									<div class="price-wrap h5">
										<span class="price-new font-weight-bold" style="color: #FF9800">Rs.'.$product['price'].'</span> 
									</div>
								</div> 
							</figure>
						</div> 
						';
					}
					?>

				</div> 
			</div>	
			
		</div>
	</div>


			<script>
				 //  product searching javascript
				 const productSearch = document.getElementById("product-search");
                                const colEveryProduct = document.querySelectorAll("[data-product-col]");

                                productSearch.onkeyup = () => {
								
                                    const needle = productSearch.value.trim().toLowerCase();
									
                                    if(needle == ""){
										
                                        for(const div of colEveryProduct){
                                            div.style.display = "";
                                        }
                                    }else{
                                        for(const div of colEveryProduct){
                                            const hay = div.getAttribute("data-product-col").trim().toLowerCase();
                                            if(hay.search(needle) == -1){
                                                div.style.display = "none";
                                            }else{
                                                div.style.display = "";
                                            }
                                        }
                                    }
                                }
			</script>



	<!-- Footer section -->
	
	<?php include '../includes/footer.php'; ?>	
	<?php include '../includes/importjs.php'; ?>								

	</body>
</html>
