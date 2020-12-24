
<?php
    include 'doodle/doodle.php';

    //Password hash For admin
    Api::GET("/hash".Api::STRING,function($password){
        Api::send(md5($password));
    });

    //login validation from 3 tables
    Api::POST("/user/login",function(){
        $password_hash = md5($_POST['password']);
        $data = database::query('SELECT id, username as firstName, admin_name FROM admin WHERE username = ? and password = ?', $_POST['username'], $password_hash);
        if (!empty($data)){
            $data['usertype']='admin';
        }else{
            $data = database::query('SELECT id, email, firstName FROM customer WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
            if(!empty($data)){
                $data['usertype']='customer';
            }else {
                $data = database::query('SELECT id, email, firstName FROM member WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
                if(!empty($data)){
                    $data['usertype']='member';
                }
            }
        }
        $data['token'] = Token::create($data);
        Api::send($data);
    });

    //signup for customer
    Api::POST('/user/signup',function(){
        $sql = 'INSERT INTO customer (firstName, lastName, address, phone, email, password) VALUES(?,?,?,?,?,?)';
        $response = Database::query($sql, $_POST['firstName'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'],  $_POST['password']);
        Api::send($response);
    });

    //check email validation
    Api::GET("/check/email".Api::ALLSTRING,function($email){
        $data = database::query('SELECT email FROM customer WHERE email = ? UNION SELECT email FROM member WHERE email = ?', $email, $email);

        if (empty($data)){
            Api::send(['exist'=>FALSE]);
        }else{
            Api::send(['exist'=>TRUE]);
        }
    });

    //register member   
    Api::POST('/user/register',function(){
        $sql = 'INSERT INTO member (firstName, lastName, address, phone, email, password, validFrom, validTo) VALUES(?,?,?,?,?,?,?,?)';
        $response = Database::query($sql, $_POST['fname'], $_POST['lname'], $_POST['address'], $_POST['phone'], $_POST['email'],  $_POST['password'], $_POST['validFrom'], $_POST['validTo']);
        Api::send($response);
    });

    // view member
    Api::GET("/user/view",function(){
        $data = database::query('SELECT * FROM member');
        Api::send($data);
    });

     /* Token Debug*/
     Api::get('/token/verify'.API::STRING,function($token){
        Api::send(Token::verify($token));
    });

    /*General Token*/
    Api::get('/visitor/token/create',function(){
        Api::send(Token::create([
            'usertype' => 'customer'
        ]));
    });

    //add products
    Api::post('/product',function(){
        if(isset($_POST['token']) && !Token::isExpired($_POST['token']) && !Token::isTampered($_POST['token'])){
            $payload = Token::getPayload($_POST['token']);
            $sql = 'INSERT INTO product (name,description,category,price,brand) VALUES (?,?,?,?,?)';
            $response = Database::query($sql, $_POST['name'], $_POST['description'], $_POST['category'], $_POST['price'], $_POST['brand']);
            Api::send($response);
        }else{
            Api::send("Token Invalid");
        }
        
    });

    //get product
    Api::get('/product/all',function(){
        $sql = "Select * from product";
        $response = Database::query($sql);
        Api::send($response);
    });
?>

