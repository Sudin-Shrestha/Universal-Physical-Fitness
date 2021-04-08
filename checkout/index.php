

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
	
		<div class="row mb-5" >
			<div class="col-md-2 mx-2 bg-white p-1 h-100 mt-3">
				 
				<div class="d-flex justify-content-center mt-1" id="payment-button">
						<img src="https://omegaschool.edu.np/storage/phpclpxKK.png" alt="" height="60" width="60">
					</div>
					<h6 class="text-center py-2">Khalti wallet</h6>
			
			
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
				<h6 class="py-3">Total Amount <span style="color: #FF9800; float: right; font-size: 25px;" class="total-cart" id="total-cart"></span> </h6>
			</div>
		</div>
	</div>




	<!-- Footer section -->
	<?php //include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>		

	<?php 
		$args = http_build_query(array(
			'token' => 'QUao9cqFzxPgvWJNi9aKac',
			'amount'  => 500
		));
		
		$url = "https://khalti.com/api/v2/payment/verify/";
		
		# Make the call using API.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$headers = ['Authorization: test_secret_key_ba43278c6c73464f9481af820ccd6a39'];
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		// Response
		$response = curl_exec($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		
	?>						


	<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_0b622aba68e54136bfa071aab6732a30",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };
		var amt = document.getElementById("total-cart").value;
		console.log(amt);

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: amt * 100});
        }
    </script>
	</body>
</html>
