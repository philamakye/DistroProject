<?php

    //headers
    header('Access-Control-Allow-Origin: *'); //allows acces without auth etc
    header('Content-Type: application/json');

    
    //initializing the API
    include_once('../core/initialize.php');

    //instantiate the Product class
    $product = new Product($db);

    //get products query result
    $result = $product->read();
    
    //get the row count
    $num = $result->rowCount();

    if($num > 0){
        $product_array = array();
        $product_arr['data'] = array();
        
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $product_item = array(
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'description' => $description,
                'stock' => $stock,
                'product_img' => $product_img,
                'category_id' => $category_id,
                'category_name' => $category_name
            );
            array_push($product_arr['data'], $product_item);
            
        }
        //convert to json and output
        echo json_encode($product_arr);
        
    } else {
        echo json_encode(array('message' => 'No product found!'));
    }

?>