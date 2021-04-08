<?php 
    $cURLConnection = curl_init('http://localhost/fitness/api/notice');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);
 
     

        
         header('Location: ../dashboard/index.php');

?>