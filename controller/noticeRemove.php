<?php 
    

if(isset($_POST['deleteNotice'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/delete/notice');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo $apiResponse;
    // var_dump ($_POST);
   
   header ('Location: ../dashboard/index.php');
};
?>