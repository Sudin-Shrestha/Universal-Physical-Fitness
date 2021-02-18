
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
	$PAGENAME='shipping';
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
  
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-7 mx-2 p-1 h-100 mt-3">
                <!-- header -->
                <div class="row bg-light mx-1 py-2">
                    <div class="col-md-4">
                        Item
                    </div>
                    <div class="col-md-3">
                        Quantity
                    </div>
                    <div class="col-md-3 text-right">
                        Price
                    </div>
                </div>

                 <!-- main item show -->
                <div class="card my-2">
                    <div class="card-header">
                        Package
                    </div>
                    <div class="card-body show-cart table">
                        
                    </div>
                 </div>
			</div>

            <?php
            if(isset($_COOKIE['token'])){
            

            $accesstoken = file_get_contents('http://localhost/fitness/api/token/verify/'.$_COOKIE['token']);

            $accesstoken = json_decode($accesstoken,TRUE);
       
            
            if($accesstoken != FALSE){

            echo '
            <div class="col-md-4 bg-white my-3">
            <strong>Shipping and Billing</strong>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span>'.$token['firstName'].' '.$token['lastName'].'</span> 
                <span class="d-block pl-4">'.$token['address'].'</span>
            </p>

            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                </svg>
                <span>Billing on same address</span> 
            </p>

            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <span>'.$token['phone'].'</span> 
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg>
                <span>'.$token['email'].'</span> 
            </p>
            <small class="text-info">If invalid details please change details on profile.</small>
            <h6 class="font-weight-bold py-3">Order Summary</h6>
            <small class="py-5">Subtotal (1 item and shipping fee incude): <span class="float-right total-cart"></span> </small> 
            <h6 class="py-3">Total Amount <span style="color: #FF9800; float: right; font-size: 25px;" id="total-cart" class="total-cart"></span> </h6>
            <small id="error-txt"></small>
            <a href="../profile"<button style="background-color: #FF9800;" class="btn w-100 my-2" id="confirmOrder" name="confirmOrder" >Confirm order</button></a>
        </div>
                ';


            }else{
                setcookie('toast_message', "Token is invalid or expired", time()+60*60, "/");
                header('Location: ../home');
                exit;
            }

        }
?>
		</div>
	</div>

        <script>
            var cash =  document.getElementById("total-cart");
            if (cash == 0){
                document.getElementById("error-txt").innerHTML = "No product found";
            }
        </script>

      

	<!-- Footer section -->
	<?php include '../includes/footer.php'; ?>

	<?php include '../includes/importjs.php'; ?>								

        <script>
            $('#confirmOrder').on('click', function(){
                
                const data = shoppingCart.listCart();
           
                //console.log(data);
                for(var i=0; i<data.length; i++){
                    const posts = data[i];
                    posts.token = "<?=$_COOKIE['token']?>"; 
                    delete posts.price;
                    delete posts.name;
                   
                    console.log(posts);
    
                    //console.log(typeof JSON.stringify(data[i]));
                    //continue;
                    fetch('http://localhost/fitness/api/order/'+posts.id+'/'+posts.count+'/'+posts.total+'/'+posts.token);
                    continue;
                        fetch('http://localhost/fitness/api/order', {
                            method: 'post',
                            headers: {'Content-Type': 'application/json'},
                            body: JSON.stringify(posts),
                        })
                        .then(data => {
                            console.log('Success:', data.json());
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                }   
                
            });
        </script>
	</body>
</html>
