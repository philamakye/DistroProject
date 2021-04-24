<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');


    //initializing our API
    include_once('../core/initialize.php');

    //instantiate the Wishlist class

    $wishlist = new Wishlist($db);

    $wishlist->id = isset($_GET['id']) ? $_GET['id'] : die();
    $wishlist->read();

    $wishlist_arr = array(
        'id'=>$wishlist->id,
        'wishlist_name' => $wishlist->wishlist_name,
        'products'=>unserialize(base64_decode($wishlist->products))
    );

    //make a json
    print_r(json_encode($wishlist_arr));


?>