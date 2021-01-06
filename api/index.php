<?php
    include 'doodle/doodle.php';

    //Password hash For admin
    Api::GET("/hash".Api::STRING,function($password){
        Api::send(md5($password));
    });

    //login validation from 3 tables
    Api::POST("/user/login",function(){
        $password_hash = md5($_POST['password']);
        $data = database::query('SELECT id, username as email, admin_name FROM admin WHERE username = ? and password = ?', $_POST['username'], $password_hash);
        if (!empty($data)){
            $data['usertype']='admin';
        }else{
            $data = database::query('SELECT id, email, firstName, lastName, address, phone FROM customer WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
            if(!empty($data)){
                $data['usertype']='customer';
            }else {
                $data = database::query('SELECT id, email, firstName, lastName, address, phone FROM member WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
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
    Api::GET("/user/view".API::STRING,function($order){
        if($order == 'desc' ){
            $data = database::query('SELECT * FROM member ORDER BY validTo desc');
        }else{
            $data = database::query('SELECT * FROM member ORDER BY validTo asc');
        }
    
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

   // get data for token
    Api::GET('/profile',function(){
        $sql = 'Select * from customer';
        $response = Database::query($sql);
        Api::send($response);
    });

    //add products
    Api::POST('/product',function(){
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
    Api::GET('/product/all',function(){
        $sql = "Select product.id AS id, product.name AS name, product.description AS description, product.category AS category, product.price AS price, product.brand AS brand, image.name AS image FROM product INNER JOIN productimage ON productimage.productId = product.id INNER JOIN image ON image.id = productimage.imageId";
        $response = Database::query($sql);
        Api::send($response);
    });

    // view product
    Api::GET("/product/view",function(){
        $data = database::query('SELECT * FROM product');
        Api::send($data);
    });

    Api::GET('/product'.Api::INTEGER,function($product_id){
        $sql = "Select product.id AS id, 
            product.name AS name, 
            product.description AS description,
            product.category AS category, 
            product.price AS price, 
            product.brand AS brand, 
            image.name AS image 
            FROM product INNER JOIN productimage ON productimage.productId = product.id INNER JOIN image ON image.id = productimage.imageId
            WHERE product.id=?";
            $response = Database::query($sql,$product_id);
            Api::send($response[0]);
    });

     // view blog
     Api::GET("/blog/view",function(){
        $data = database::query('SELECT * FROM blog');
        Api::send($data);
    });

    //upload image
    Api::POST("/image/save", function(){
        $valid = File::check('jpg','png','jpeg','svg');
        if($valid == TRUE) {
            $name = File::save();
            if($name){
                Api::send($name);
            }else{
                Api::send(File::$error);
            }
        }else {
            Api::send(File::$error);
        }
    });


    // uplaod image
    Api::GET("/image/add".API::STRING,function($name){
        $sql = 'INSERT INTO image (name) VALUES (?)';
        $response = Database::query($sql, $name);
        Api::send($response);
    });

    Api::GET("/product/images".API::INTEGER.API::INTEGER,function($product_id, $image_id){
        $sql = 'INSERT INTO productimage(productId,imageId) VALUES (?,?)';
        $response = Database::query($sql,$product_id, $image_id);
        Api::send($response);
    });

    //add blog
    Api::POST("/blog",function(){
        $sql = "INSERT INTO blog (title, description, image) VALUES (?,?,?)";
        $response = Database::query($sql, $_POST['title'], $_POST['description'],$_POST['image']);
        Api::send($response);
    });

    Api::GET('/blog'.Api::INTEGER,function($blog_id){
        $sql = "SELECT * FROM blog where id=?";
        $response = Database::query($sql,$blog_id);
        Api::send($response[0]);
    });

      //get blog
      Api::GET('/blog/all',function(){
        $sql = "Select * from blog";
        $response = Database::query($sql);
        Api::send($response);
    });


?>

