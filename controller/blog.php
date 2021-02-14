<?php 


if(isset($_POST['addBlog'])){

    // var_dump($_FILES);
    // exit;

    $cURLConnection = curl_init('http://localhost/fitness/api/image/save');
    $post = array(
        'image' => new CurlFile($_FILES["image"]["tmp_name"], $_FILES["image"]["type"], $_FILES["image"]["name"])
        );

    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $post);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);
 
    
    $_POST['image'] = $apiResponse;

    $cURLConnection = curl_init('http://localhost/fitness/api/blog');
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $apiResponse = json_decode($apiResponse,TRUE);


 
    header ('Location: ../dashboard/editBlog.php');
};