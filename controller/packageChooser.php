<?php include '../includes/toast.php'; ?>	
<?php 
if(isset($_POST['packageChooser'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/package/query');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    // echo $apiResponse;
    // var_dump ($_POST);
   
   header ('Location: ../classes');
   setcookie('toast_message', "Send successfully, we will response soon", time()+60*60, "/");

};
?>