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
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header incude -->
    <?php include '../includes/header.php';
        include '../includes/toast.php';
        
        if(isset($_COOKIE['token'])){
            

            $accesstoken = file_get_contents('http://localhost/fitness/api/token/verify/'.$_COOKIE['token']);

            $accesstoken = json_decode($accesstoken,TRUE);

            
            if($accesstoken != FALSE){

            echo '
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-4">
                            <h4 class="mb-4 text-center text-info">Welcome '.$token['firstName'].'</h4>
                            <div class="row justify-content-center mb-2">
                                <img src="https://i.stack.imgur.com/gBMMe.png?s=328&g=1" alt="" height="300">
                            </div>
                            <div class="bg-white p-4">
                                <h5 class="mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg> '.$token['address'].'</h5>
                                <h5 class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg> '.$token['phone'].'</h5>
                        
                            </div>
                        </div>


                        <div class="col-md-8">
                            <h4 class="mb-4 text-info">Manage My Account</h4>

                            <div class="row mb-4">
                                <div class="col-md-4 bg-white mx-3 pt-2">
                                    <strong>Personal Detail</strong>
                                    <div class="py-2">'.$token['firstName'].' '.$token['lastName'].'</div>
                                    <div class="py-2">'.$token['email'].'</div>
                                </div>
                                <div class="col-md-7 bg-white ml-3 pt-2">
                                    <strong>Shipping Detail</strong>
                                    <div class="py-2">Nepal, Kathmandu, '.$token['address'].'</div>
                                    <div class="py-2">Shipping Name: '.$token['firstName'].'</div>
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
                ';


            }else{
                setcookie('toast_message', "Token is invalid or expired", time()+60*60, "/");
                header('Location: ../home');
                exit;
            }

        }
?>

  

	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								


	</body>
</html>
