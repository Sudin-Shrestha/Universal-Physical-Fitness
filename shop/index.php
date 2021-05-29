<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="Universal Physical Fitness">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='shop';
	include '../includes/import.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
							<select  class="price-sorting type-regular custom-select" name="price-sorting" id="price-sorting">
							  <option selected disabled>Best Match</option>
							  <option value="h2l" id="h2l">High to low</option>
							  <option value="l2h" id="l2h">Low to high</option>
							</select>
						</div>
					</div>
				</div>
					<hr class="my-0"/>
				<div class="row my-4 products-grid">
					<?php  
				
					$connect = mysqli_connect("localhost", "root", "", "fitness");
					$record_per_page = 9;
					$page = '';
						if(isset($_GET["page"]))
						{
							$page = $_GET["page"];
						}
						else
						{
							$page = 1;
						}

					$start_from = ($page-1)*$record_per_page;

					$query = "Select product.id AS id, product.name AS name,
								product.description AS description, 
								product.category AS category, 
								product.price AS price, 
								product.brand AS brand, 
								image.name AS image
								FROM 
								product INNER JOIN productimage ON productimage.productId = product.id INNER JOIN image ON image.id = productimage.imageId
								LIMIT $start_from, $record_per_page
								";
								$result = mysqli_query($connect, $query);

								foreach($result as $product){
									echo '
									<div class="col-md-4 product" data-product-col="'.$product['name'].'" data-price="'.$product['price'].'">
										<figure class="card card-product">
											<div class="img-wrap"><img src="http://localhost/fitness/api/storage/'.$product['image'].'"></div>
											<figcaption class="info-wrap">
													<h4 class="title">'.$product['name'].'</h4>
													<p class="desc">Brand: <span class="text-primary"> '.$product['brand'].' </span></p>
											</figcaption>
											<div class="bottom-wrap">
												<a href="../product/?id='.$product['id'].'" class="btn btn-sm btn-info float-right">Order Now</a>	
												<div class="price-wrap h5">
													<span class="price-new price font-weight-bold" style="color: #FF9800">Rs.'.$product['price'].'</span> 
												</div>
											</div> 
										</figure>
									</div> 
									';
								}	
					?>
				</div>
			</div> 	

			<div class="site-pagination">
						<?php
							$page_query = "Select product.id AS id, product.name AS name,
									product.description AS description, 
									product.category AS category, 
									product.price AS price, 
									product.brand AS brand, 
									image.name AS image
									FROM 
									product INNER JOIN productimage ON productimage.productId = product.id INNER JOIN image ON image.id = productimage.imageId";
							$page_result = mysqli_query($connect, $page_query);
							$total_records = mysqli_num_rows($page_result);
							$total_pages = ceil($total_records/$record_per_page);
							$current_page = isset($_GET['page'])?$_GET['page'] : 1;
							for($i=1; $i<=$total_pages; $i++){
								$active_class = "";
								if($i==$current_page){
									$active_class = "active";
								}
								echo "<a href='../shop/index.php?page=".$i."' class='$active_class'>".$i."</a>";
							}
							
							
							?>
			</div>
			
			
		</div>
	</div>


			<script>
			$(document).on("change", "#price-sorting", function() {
				console.log("abhsfhb");

				var sortingMethod = $(this).val();

				if(sortingMethod == 'l2h')
				{
					console.log("low to high");
					sortProductsPriceAscending();
				}
				else if(sortingMethod == 'h2l')
				{
					console.log("high to low");
					sortProductsPriceDescending();
				}

			});
			function sortProductsPriceAscending()
			{
				var products = $('.product');
				products.sort(function(a, b){ return $(a).data("price")-$(b).data("price")});
				$(".products-grid").html(products);

			}

			function sortProductsPriceDescending()
			{
				var products = $('.product');
				products.sort(function(a, b){ return $(b).data("price") - $(a).data("price")});
				$(".products-grid").html(products);

			}
			</script>


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
