  
<?php

$cURLConnection = curl_init('http://localhost/fitness/api/user/login');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);
$apiResponse = json_decode($apiResponse,TRUE);

    if(isset($apiResponse) && isset($apiResponse['token'])){

        // $token = file_get_contents('http://localhost/fitness/api/token/verify/'.$apiResponse['token']);
        setcookie('token', $apiResponse['token'], time()+24*60*60, "/");
     
        if($apiResponse['usertype']== 'admin'){
            header('Location: ../dashboard');
            exit;
        }else if($apiResponse['usertype'] == 'customer'){
            header('Location: ../home');
            exit;
        }else{
            header('Location: ../home');
            exit;
        }
    }else

    setcookie('toast_message', "Invalid login details", time()+60*60, "/");
    header('Location: ../home');
    exit;
?>