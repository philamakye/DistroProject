<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');


    //initializing our API
    include_once('../core/initialize.php');

    //instantiate the Post class

    $product = new Product($db);

    $product->id = isset($_GET['id']) ? $_GET['id'] : die();
    $product->read_single();

    $product_arr = array(
        'id'=>$product->id,
        'name' => $product->name,
        'price' => $product->price,
        'description' => $product->description,
        'stock' => $product->stock,
        'product_img' => $product->product_img,
        'category_id' => $product->category_id,
        'category_name' => $product->category_name
    );

    //make a json
    print_r(json_encode($product_arr));


?>