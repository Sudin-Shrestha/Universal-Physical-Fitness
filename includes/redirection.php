<?php
    if(isset($_COOKIE['token'])){
        
        $accesstoken = json_decode(
            file_get_contents('http://localhost/fitness/api/token/verify/'.$_COOKIE['token']),
            TRUE
        );

        if(isset($accesstoken['usertype'])){

            if($accesstoken['usertype'] == 'admin'){
                header('Location: ../dashboard');
                exit;
            }

        }
    }
    ?>