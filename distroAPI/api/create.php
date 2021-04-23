<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


    //initializing our API
    include_once('../core/initialize.php');

    //instantiate the Post class
    $product = new Product($db);

    //get the posted data
    $data = json_decode(file_get_contents("php://input"));

    $product->name = $data->name;
    $product->price = $data->price;
    $product->description = $data->description;
    $product->stock = $data->stock;
    $product->product_img = $data->product_img;
    $product->category_id = $data->category_id;

    //create post
    if($product->create()){
        echo json_encode(
            array('message' => 'Product created.')
        );
    } else {
        echo json_encode(
            array('message' => 'Product not created.')
        );
    }

   

?>