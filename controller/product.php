<?php 


if(isset($_POST['addProduct'])){
    
    
    $cURLConnection = curl_init('http://localhost/fitness/api/product');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);
    $product_id = $apiResponse['inserted_id'];

    $cURLConnection = curl_init('http://localhost/fitness/api/image/save');
    
    $post = array(
        'image' => new CurlFile($_FILES["image"]["tmp_name"], $_FILES["image"]["type"], $_FILES["image"]["name"]),
        );

    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $post);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);


    $apiResponse = json_decode(
        file_get_contents('http://localhost/fitness/api/image/add/'.$apiResponse),
        TRUE
    );
    $image_id = $apiResponse['inserted_id'];


    $apiResponse = json_decode(
        file_get_contents('http://localhost/fitness/api/product/images/'.$product_id.'/'.$image_id),
        TRUE
    );
    

 
    header ('Location: ../dashboard/editProduct.php');
};