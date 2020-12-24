<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Universal Physical Fitness</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
	$PAGENAME='profile';
	include '../includes/import.php'; 
	?>
    <style>
    body{
            background-color: #eff0f5;
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

    <!-- Profile Section start here -->
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <h4 class="mb-4 text-center text-info">Welcome Name</h4>
                <div class="row justify-content-center mb-2">
                    <img src="https://i.stack.imgur.com/gBMMe.png?s=328&g=1" alt="" height="300">
                </div>
                <div class="bg-white p-4">
                    <h5 class="">Address: Ason Kathmandu</h5>
                    <h5 class="">Phone: 986516512</h5>
            
                </div>
            </div>

            <div class="col-md-8">
                <h4 class="mb-4 text-info">Manage My Account</h4>

                <div class="row mb-4">
                    <div class="col-md-4 bg-white mx-3 pt-2">
                        <strong>Personal Detail</strong>
                        <div class="py-2">Your Name</div>
                        <div class="py-2">Youremail@gmail.com</div>
                    </div>
                    <div class="col-md-7 bg-white ml-3 pt-2">
                        <strong>Shipping Detail</strong>
                        <div class="py-2">Your Name</div>
                        <div class="py-2">Youremail@gmail.com</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Recent Order
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
