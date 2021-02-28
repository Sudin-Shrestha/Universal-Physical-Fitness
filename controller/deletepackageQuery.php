<?php 

if(isset($_POST['deletePackageQuery'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/packagequery/delete');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
  
   header ('Location: ../dashboard/packageQuery.php');
};
?>