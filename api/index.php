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
            $data = database::query('SELECT id, email, firstName, lastName, address, phone, password FROM customer WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
            if(!empty($data)){
                $data['usertype']='customer';
            }else {
                $data = database::query('SELECT id, email, firstName, lastName, address, phone, validFrom, validTo, password FROM member WHERE email = ? and password = ?', $_POST['username'], $_POST['password']);
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


    // view memberss
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

    //get product
    Api::GET('/product/limit'.Api::INTEGER,function($limit){
            $sql = "Select product.id AS id, product.name AS name, product.description AS description, product.category AS category, product.price AS price, product.brand AS brand, image.name AS image FROM product INNER JOIN productimage ON productimage.productId = product.id INNER JOIN image ON image.id = productimage.imageId LIMIT ?";
            $response = Database::query($sql, $limit);
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

    //view blog
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

    //add queries
    Api::POST("/queries",function(){
        $sql = "INSERT INTO queries (name, phone, email,subject) VALUES (?,?,?,?)";
        $response = Database::query($sql, $_POST['name'], $_POST['phone'],$_POST['email'],$_POST['subject']);
        Api::send($response);
    });

    //view queries
    Api::GET("/queries/all",function(){
        $sql = "Select * from queries";
        $response = Database::query($sql);
        Api::send($response);
    });

    //DELETE query
    Api::POST("/delete/query",function(){
        $sql = "DELETE FROM `queries` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

    // delete Apis
    //DELETE product
    Api::POST("/delete/product",function(){
        $sql = "DELETE FROM `product` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

    //DELETE Blog
    Api::POST("/delete/blog",function(){
        $sql = "DELETE FROM `blog` WHERE id=?";
        $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

    //DELETE user
    Api::POST("/delete/user",function(){
        $sql = "DELETE FROM `member` WHERE id=?";
         $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });


    //Update APIS
     //update product
     Api::POST("/update/product",function(){
        $sql = "UPDATE product
        SET name=?, price=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updatedName'],$_POST['updatedPrice'],$_POST['edit_id'],);
        Api::send($response);
    });

     //update Blog
     Api::POST("/update/blog",function(){
        $sql = "UPDATE blog
        SET title=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updateTitle'],$_POST['edit_id']);
        Api::send($response);
    });

    //update user
    Api::POST("/update/user",function(){
    $sql = "UPDATE member
    SET email=?, password=?, validFrom=?, validTo=?
    WHERE id=?;";
    $response = Database::query($sql, $_POST['updatedEmail'],$_POST['updatedPassword'],$_POST['updatedValidFrom'],$_POST['updatedValidTo'],$_POST['edit_id']);
    Api::send($response);
    });

    //update Customer details
    Api::POST("/update/customer",function(){
        $sql = "UPDATE customer
        SET firstName=?, lastName=?, address=?, phone=?, email=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updatedfirstName'],$_POST['updatedlastName'],$_POST['updatedAddress'],$_POST['updatedPhone'],$_POST['updatedEmail'],$_POST['edit_id']);
        Api::send($response);
    });

    //update customer password
    Api::POST("/update/password",function(){
        $sql = "UPDATE customer
        SET password=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['updatedPassword'],$_POST['edit_id']);
        Api::send($response);
    });

    //Place order
    Api::GET('/order'.API::INTEGER.API::INTEGER.API::STRING.API::STRING,function($product_id, $count, $total, $token){
    //  Api::send($_GET);
     
        if(isset($token)){
            $payload = Token::getPayload($token);
                if($payload['usertype'] == 'customer'){
                    $sql = 'INSERT INTO orders (productId,customerId,orderDate,orderStatus,quantity,totalAmount) VALUES (?,?,?,?,?,?)';
                }else {
                    $sql = 'INSERT INTO orders (productId,memberId,orderDate,orderStatus,quantity,totalAmount) VALUES (?,?,?,?,?,?)';
                }

            $response = Database::query($sql, $product_id, $payload[0]['id'], date("Y/m/d"), "pending", $count, $total);
           
            Api::send($response);
        }else{
            Api::send("Token Invalid"); 
        }
        
    });

    //orders all
    Api::GET("/orders/all",function(){
        $sql = "Select * from orders";
        $response = Database::query($sql);
        Api::send($response);
    });

    //orders all
    Api::GET("/orders/each",function(){
        $sql = "Select orders.id AS id, 
                orders.productId AS productId,
                orders.memberId AS memberId,
                orders.customerId AS customerId,
                orders.orderDate AS date,
                orders.orderStatus AS status,
                orders.quantity AS quantity,
                orders.totalAmount AS amount,
                product.name AS productName
                from orders INNER JOIN product ON product.id = orders.productId 
        ";
        $response = Database::query($sql);
        Api::send($response);   
    });

    //update order status
    Api::POST("/update/order",function(){
        $sql = "UPDATE orders
        SET orderStatus=?
        WHERE id=?;";
        $response = Database::query($sql, $_POST['orderStatus'],$_POST['edit_id']);
        Api::send($response);
    });

    //DELETE order
    Api::POST("/delete/order",function(){
        $sql = "DELETE FROM `orders` WHERE id=?";
         $response = Database::query($sql, $_POST['delete_id']);
        Api::send($response);
    });

    //orders all
    Api::GET("/orders/user".Api::INTEGER,function($memberNo){
        $sql = "Select 
                orders.orderDate AS date,
                orders.orderStatus AS status,
                orders.quantity AS quantity,
                orders.totalAmount AS amount,
                product.name AS productName
                from orders INNER JOIN product ON product.id = orders.productId  where orders.memberId=?";
        $response = Database::query($sql, $memberNo);
        Api::send($response);
    });

    //orders all
    Api::GET("/orders/customer".Api::INTEGER,function($customerNo){
        $sql = "Select 
                orders.orderDate AS date,
                orders.orderStatus AS status,
                orders.quantity AS quantity,
                orders.totalAmount AS amount,
                product.name AS productName
                from orders INNER JOIN product ON product.id = orders.productId  where orders.customerId=?";
        $response = Database::query($sql, $customerNo);
        Api::send($response);
    });
    

?>

