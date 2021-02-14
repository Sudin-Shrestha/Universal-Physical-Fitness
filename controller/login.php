  
<?php include '../includes/toast.php'; ?>	
<?php
$cURLConnection = curl_init('http://localhost/fitness/api/user/login');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);
$apiResponse = json_decode($apiResponse,TRUE);

    if(isset($apiResponse) && isset($apiResponse['token'])){

        setcookie('token', $apiResponse['token'], time()+24*60*60, "/");
     
        if($apiResponse['usertype']== 'admin'){
            header('Location: ../dashboard');
            exit;
        }else if($apiResponse['usertype'] == 'customer'){
            header('Location: '.$_SERVER['HTTP_REFERER']);
            exit;
        }else{
            header('Location: '.$_SERVER['HTTP_REFERER']);
            exit;
        }
    }else

    setcookie('toast_message', "Invalid login details", time()+60*60, "/");
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit;
?>

