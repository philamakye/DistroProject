<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


    //initializing our API
    include_once('../core/initialize.php');

    //instantiate the Post class
    $product = new Product($db);

    //get the posted data
    $data = json_decode(file_get_contents("php://input"));

    $product->id = $data->id;
    $product->name = $data->name;
    $product->price = $data->price;
    $product->description = $data->description;
    $product->stock = $data->stock;
    $product->category_id = $data->category_id;

    //create post
    if($product->update()){
        echo json_encode(
            array('message' => 'Post updated.')
        );
    } else {
        echo json_enconde(
            array('message' => 'Post not updated.')
        );
    }

   

?>