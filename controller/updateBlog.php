<?php 

    
if(isset($_POST['updateBlog'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/update/blog');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    
   header ('Location: ../dashboard/editBlog.php');  
    
   
};

?> 
