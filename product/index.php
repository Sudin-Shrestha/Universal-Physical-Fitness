<?php 
    if(!isset($_GET['id']) && $_GET['id'] < 1){
        header('Location: ../shop');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="Universal Physical Fitness">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../includes/import.php'; ?>
    <?php 
	$PAGENAME='product';
	
	?>
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

    <?php 
        $products = json_decode(
            file_get_contents('http://localhost/fitness/api/product/'.$_GET['id']),
            TRUE);
        //     echo '<pre>';
        //    var_dump($products);
        //    echo '</pre>';

    

        echo '
             
        <div class="container my-5 bg-white">
        <div class="row">
            <div class="col-md-4 my-5 d-flex justify-content-center">
                <img src="http://localhost/fitness/api/storage/'.$products['image'].'" alt="product image" height="400"  >
            </div>

            <div class="col-md-5 my-3 p-4">
                <div class="row">
                    <h2>'.$products['name'].'</h2>
                </div>
                <div class="row">
                    <p>Brand: <span class="text-primary">'.$products['brand'].'</span></hp>
                </div>
                <span>Rating
                <div class="rating">
                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </div></span>
                <hr class="my-0">
                <div class="row mt-3">
                    <h4 style="color: #FF9800"> Rs <span>'.$products['price'].'</span> </h4>
                </div>
                <div class="row my-4">
             
                        <button onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()"
                        class="btn btn-light">-</button>
                        <input class="w-25" min="1" max="10" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()"
                        class="btn btn-light">+</button> 
                        
                        
                </div>

                <div class="row">
                    <button type="button" class="btn btn-info px-5 mr-3 add-to-cart" data-name='.$products['name'].' data-price='.$products['price'].'>Add to Cart</button>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
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
                <p><pre>'.$products['description'].'</pre> </p>
            </div>
        </div>
    </div>
        ';
       
    ?>


	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
