<?php include '../includes/toast.php'; ?>	
<?php 


    $cURLConnection = curl_init('http://localhost/fitness/api/user/signup');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);
 
     
     $isEmailValid = true;

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $isEmailValid = false;
        
         header('Location: '.$_SERVER['HTTP_REFERER']);
         setcookie('toast_message', "Signup Successful Please Login to continue", time()+60*60, "/");
     }
?>