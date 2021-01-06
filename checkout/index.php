

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
	$PAGENAME='checkout';
	?>
</head>
<style>
    body{
            background-color: #eff0f5;
        }
    </style>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header incude -->
	<?php include '../includes/header.php'; ?>	
  
	<div class="container mt-5">
		<div class="bg-warning mb-4">
			<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
			</svg>Please select above method for payment. For esewa transactions, please ensure sufficient balance. if unable to make payment with esewa, try again later.</p>
		</div>
	
		<div class="row">
			<div class="col-md-2 mx-2 bg-white p-1 h-100 mt-3">
				<a href="">
				<div class="d-flex justify-content-center mt-1">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD5EWCOP49KkEBrn7x_5xtrH_QRBvg2ax32w&usqp=CAU" alt="" height="60" width="60">
				</div>
				<h6 class="text-center py-2">esewa wallet</h6>
				</a>
			</div>
			
			<div class="col-md-2 mx-2 bg-white p-2 h-100 mt-3">
				<a href="">
				<div class="d-flex justify-content-center">
					<img src="https://thumbs.dreamstime.com/b/dollar-money-icon-cash-sign-bill-symbol-flat-payment-dollar-currency-icon-dollar-money-icon-cash-sign-bill-symbol-flat-payment-147323372.jpg" alt="" height="56" width="56">
				</div>
				<h6 class="text-center py-2">Cash on Delivery</h6>
				</a>
				
			</div>

			<div class="col-md-3">
			
			</div>

			<div class="col-md-4 bg-white mt-3">
				<h6 class="font-weight-bold py-3">Order Summary</h6>
				<small class="py-5">Subtotal (1 item and shipping fee incude): <span class="float-right total-cart"></span> </small> 
				<h6 class="py-3">Total Amount <span style="color: #FF9800; float: right; font-size: 25px;" class="total-cart"></span> </h6>
			</div>
		</div>
	</div>




	<!-- Footer section -->
	<?php //include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
