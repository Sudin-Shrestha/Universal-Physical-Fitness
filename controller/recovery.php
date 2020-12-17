<?php

    if(isset($_POST['recovery_info'])){

        if(!isset($_POST['email']) || !isset($_POST['confirm_email'])){
            setcookie('toast_message', "All fields not found", time()+60*60, "/");
            header('Location: ../recovery/');
            exit;
        }

        if(empty($_POST['email']) || empty($_POST['confirm_email'])){
            setcookie('toast_message', "Empty fields found", time()+60*60, "/");
            header('Location: ../recovery/');
            exit;
        }

        if($_POST['email'] != $_POST['confirm_email']){
            setcookie('toast_message', "Emails does not match", time()+60*60, "/");
            header('Location: ../recovery/');
            exit;
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            setcookie('toast_message', "Invalid email address", time()+60*60, "/");
            header('Location: ../recovery/');
            exit;
        }

        $emailExist = json_decode(
            file_get_contents('http://localhost/Veheaven/api/exist/user/email/'.$_POST['email']),
            TRUE
        );

        if(!$emailExist){
            setcookie('toast_message', "Email is not registered", time()+60*60, "/");
            header('Location: ../recovery/');
            exit;
        }

        /* Start Composing Email to the User */

        $receiver = $_POST['email']; // Receiver Email
        $sender= 'sudinshrestha41@gmail.com'; // Sender Email
        $subject= 'Veheaven Account Recovery Code'; // Email Subject

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $sender . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $message ='
            <html>
                <body>
                    <h1>'.$subject.'</h1><br>
                    <p>This is a test email.</p>
                </body>
            </html>
        ';

        if (mail($receiver, $sender, $message, $headers)){
            echo "Email sent";
        }else{
            echo "Email sending failed";
        }

    }
?>