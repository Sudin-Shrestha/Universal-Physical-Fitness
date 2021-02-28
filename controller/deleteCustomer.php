<?php include '../includes/toast.php'; ?>	

<?php 

    
if(isset($_POST['deleteAccount'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/delete/customer');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    unset($_COOKIE['token']); 
    setcookie('token', null, -1, '/'); 
    
   header ('Location: ../home');  
   setcookie('toast_message', "Account deleted successfully", time()+60*60, "/");


    
   
};

?> 
