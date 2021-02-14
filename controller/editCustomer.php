<?php 

    
if(isset($_POST['updateCustomer'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/update/customer');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo ($apiResponse);
    // var_dump($_POST);
    unset($_COOKIE['token']); 
    setcookie('token', null, -1, '/'); 
    
   header ('Location: ../home');  
    
   
};

?> 
