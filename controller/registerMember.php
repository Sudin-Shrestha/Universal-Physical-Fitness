<?php 
    $cURLConnection = curl_init('http://localhost/fitness/api/user/register');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);
 
     
     $isEmailValid = true;

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $isEmailValid = false;
        
         header('Location: ../dashboard/viewUser.php');
     }
?>