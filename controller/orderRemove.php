<?php 
    

if(isset($_POST['deleteOrder'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/delete/order');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo $apiResponse;
    // var_dump ($_POST);
   
   header ('Location: ../dashboard/orders.php');
};
?>