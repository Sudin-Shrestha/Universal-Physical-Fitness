

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
		
					<div class="d-flex justify-content-center mt-1">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD5EWCOP49KkEBrn7x_5xtrH_QRBvg2ax32w&usqp=CAU" alt="" height="60" width="60">
					</div>
					<h6 class="text-center py-2">esewa wallet</h6>
						<!-- <form action="https://uat.esewa.com.np/epay/main" method="POST">
							<input value="100" name="tAmt" type="hidden">
							<input value="90" name="amt" type="hidden">
							<input value="5" name="txAmt" type="hidden">
							<input value="2" name="psc" type="hidden">
							<input value="3" name="pdc" type="hidden">
							<input value="EPAYTEST" name="scd" type="hidden">
							<input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
							<input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
							<input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
							<input value="Submit" type="submit">
						</form> -->
			
			</div>
			
			<div class="col-md-2 mx-2 bg-white p-2 h-100 mt-3">
				<a href="../shipping">
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
				<small class="py-5">Subtotal (items and shipping fee incude): <span class="float-right total-cart"></span> </small> 
				<h6 class="py-3">Total Amount <span style="color: #FF9800; float: right; font-size: 25px;" class="total-cart"></span> </h6>
			</div>
		</div>
	</div>




	<!-- Footer section -->
	<?php //include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	<script>
		var path="https://uat.esewa.com.np/epay/main";
		var params= {
			amt: 10,
			psc: 0,
			pdc: 0,
			txAmt: 0,
			tAmt: 20,
			pid: "5615",
			scd: "EPAYTEST",
			su: "http://merchant.com.np/page/esewa_payment_success",
			fu: "http://merchant.com.np/page/esewa_payment_failed"
		}

		function post(path, params) {
			var form = document.createElement("form");
			form.setAttribute("method", "POST");
			form.setAttribute("action", path);

			for(var key in params) {
				var hiddenField = document.createElement("input");
				hiddenField.setAttribute("type", "hidden");
				hiddenField.setAttribute("name", key);
				hiddenField.setAttribute("value", params[key]);
				form.appendChild(hiddenField);
			}

			document.body.appendChild(form);
			form.submit();
	}
	</script>
	</body>
</html>
