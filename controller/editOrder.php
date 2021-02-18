<?php 

    
if(isset($_POST['updateOrder'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/update/order');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo ($apiResponse);
    // var_dump($_POST);

    
   header ('Location: ../dashboard/orders.php');  
    
   
};

?> 
