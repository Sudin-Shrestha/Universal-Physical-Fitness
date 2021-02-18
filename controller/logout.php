<?php include '../includes/toast.php'; ?>	
<?php

    if (isset($_COOKIE['token'])) {

        unset($_COOKIE['token']); 
        setcookie('token', null, -1, '/'); 
        
    }

    header('Location: ../home');
    setcookie('toast_message', "Thank you for visiting have a good day", time()+60*60, "/");
    exit;
?>