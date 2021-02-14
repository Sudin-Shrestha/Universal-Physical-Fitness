<?php 

    
if(isset($_POST['updatePassword'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/update/password');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    unset($_COOKIE['token']); 
    setcookie('token', null, -1, '/'); 
    
   header ('Location: ../home');  
    
   
};

?> 
