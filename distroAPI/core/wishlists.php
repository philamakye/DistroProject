<?php

    class Product{
        //db stuff
        private $conn;
        private $table = 'wishlists';
        
        
        //product properties
        public $id;
        public $wishlist_name;
        public $products;
        public $created_at;
        
        
        //constructor for db connection
        public function __construct($db){
            $this->conn = $db;
        }
        
        
        //getting all products
        public function read(){
            //create query
            
            
            //execute the query
            
        }
        
        
        //creating a new product
        public function create(){
            //create query
            
            //prepare statement
           
            
            //cleaning the data
            
            
            //bind params
           
            //execute the query
            
            
        }
        
        
        //modifying the product
        public function update(){
            //createe query
           
            //prepare statement
           
            
            //clean the data
           
            
            //bind params
           
            
            //execute the query
            
        }
        
        
        //deleting a wishlist
        public function delete(){
            //create query
            $query = 'DELETE FROM ' .$this-> table . ' WHERE id = :id';
            
            //prepare tatement
            $stmt = $this->conn->prepare($query);
            
            //clean the data
            $this->id = htmlspecialchars(strip_tags($this->id));
            
            //bind param
            $stmt->bindParam(':id', $this->id);
            
            //execute query
            if($stmt->execute()){
                return true;
            } else {
                prinf("Errorr %s. \n", $stmt->error);
                return false;
            }
        }
        
    }

?>