<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


    //initializing our API
    include_once('../core/initialize.php');

    //instantiate the Post class
    $wishlist = new Wishlist($db);

    //get the posted data
    $data = json_decode(file_get_contents("php://input"));

    $wishlist->wishlist_name = $data->wishlist_name;
    $wishlist->products = base64_encode(serialize($data->products));

    //create wishlist
    if($wishlist->create()){
        echo json_encode(
            array('message' => 'Wishlist created with id ' .$wishlist->id)
        );
    } else {
        echo json_encode(
            array('message' => 'Wishlist not created.')
        );
    }

   

?>