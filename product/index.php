<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="Universal Physical Fitness">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../includes/import.php'; ?>
    <style>
        body{
            background-color: #eff0f5;
        }
        .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        }
        .rating > span {
        display: inline-block;
        position: relative;
        width: 1.1em;
        }
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
        content: "\2605";
        position: absolute;
        }
        }
        img {
        width:200px;
        height:800px;
        object-fit:cover;
        }
    </style>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header incude -->
	<?php include '../includes/header.php'; ?>	

    <!--Product start here -->
    <div class="container my-5 bg-white">
        <div class="row">
            <div class="col-md-4 my-5">
                <img src="https://foodpharmacy.blog/img-jpg/musclepharm-combat-protein-powder-cookies-n-cream-5-lbs-2275-g.jpg" alt="product image" >
            </div>

            <div class="col-md-5 my-3">
                <div class="row">
                    <h2> MP Combat Protein Powder </h2>
                </div>
                <div class="row">
                    <p>Brand: <span class="text-primary">MP whey iso </span></hp>
                </div>
                <span>Rating
                <div class="rating">
                   <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div></span>
                <hr class="my-0">
                <div class="row mt-3">
                    <h4 style="color: #FF9800"> Rs <span>30000</span> </h4>
                </div>
                <div class="row my-4">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="btn btn-light">-</button>
                        <input class="w-25" min="1" max="10" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        class="btn btn-light">+</button>
                </div>

                <div class="row">
                    <button type="button" class="btn btn-info px-5 mr-3">Add to Cart</button>
                    <button type="button" class="btn btn-warning px-5 ">Buy it Now</button>
                </div>

            </div>

            <div class="col-md-3 p-3" style="background-color: #fafafa;">
                <!-- Delivery option -->
                <div class="row mb-3">
                    <div class="col-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="col-md-9">Delivery Option <br> <strong>Nepal, Kathmandu</strong><a href="#" class="px-2">Change</a></div>
                    
                </div>
                
                <!-- Home Delivery -->
                <div class="row my-3">
                    <div class="col-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </div>
                    <div class="col-md-9">Home Delivery<br><strong> 2-3 days</strong></div>
                </div>
                
                <!-- Cash on delivery-->
                <div class="row my-3">
                    <div class="col-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                        <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                        <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                        <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                        </svg>
                    </div>
                    <div class="col-md-9"><strong> Cash On Delivery available</strong></div>
                </div>
                <hr>
                <!--Return-->
                <div class="row my-3">
                    <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </div>
                    <div class="col-md-9"><strong>No Return Policy</strong></div>
                </div>
                <!--Warrenty -->
                <div class="row my-3">
                    <div class="col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield-fill-x" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zM6.854 6.146a.5.5 0 1 0-.708.708L7.293 8 6.146 9.146a.5.5 0 1 0 .708.708L8 8.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 8l1.147-1.146a.5.5 0 0 0-.708-.708L8 7.293 6.854 6.146z"/>
                    </svg>
                    </div>
                    <div class="col-md-9"><strong>Warrenty Not available</strong></div>
                </div>
                <hr>
                <div class="row">
                    <span class="ml-3">Sold By:<br><strong>Scitec Nutrition </strong> </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card">
            <div class="card-header">
                Description of Product 
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>


	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
