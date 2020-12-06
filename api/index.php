
<?php
    include 'doodle/doodle.php';

    Api::GET("/hash".Api::STRING,function($password){
        Api::send(md5($password));
    });

    Api::POST("/user/login",function(){
        $password_hash = md5($_POST['password']);
        $data = database::query('SELECT id, username, name FROM admin WHERE username = ? and password = ?', $_POST['username'], $password_hash);
        if (!empty($data)){
            $data['usertype']='admin';
        }else{
            $data = database::query('SELECT id, email, firstName FROM customer WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
            if(!empty($data)){
                $data['usertype']='customer';
            }
        }
        Api::send($data);
    });

    Api::POST('/user/signup',function(){
        $sql = 'INSERT INTO customer (firstName, lastName, address, phone, email, password) VALUES(?,?,?,?,?,?)';
        $response = Database::query($sql, $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'],  $_POST['password']);
        Api::send($response);
    });

    Api::GET("/check/email".Api::ALLSTRING,function($email){
        $data = database::query('SELECT email FROM customer WHERE email = ?', $email);
        if (empty($data)){
            Api::send(['exist'=>FALSE]);
        }else{
            Api::send(['exist'=>TRUE]);
        }
    });
?>

