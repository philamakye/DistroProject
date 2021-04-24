<?php

    class Wishlist{
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
        
        
        //getting all wishlists
        public function read(){
            //create query
            $query = 'SELECT 
            p.id,
            p.wishlist_name,
            p.products 
            FROM '.$this->table . ' p 
            WHERE p.id=? LIMIT 1';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);
            
            //bind params
            $stmt->bindParam(1, $this->id);
            
            //execute the query
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->wishlist_name = $row['wishlist_name'];
            $this->products = $row['products'];
        }
        
        
        //creating a new wishlist
        public function create(){
            //generate a unique id
            $wish_id = uniqid();
            
            //create query
            $query = 'INSERT INTO ' .$this->table . 
                ' SET id = :wish_id, wishlist_name = :wishlist_name, products = :products';
            
            //prepare statement
           $stmt = $this->conn->prepare($query);
            
            //cleaning the data
            $this->id = $wish_id;
            $this->wishlist_name = htmlspecialchars(strip_tags($this->wishlist_name));
            $this->products = htmlspecialchars(strip_tags($this->products));
            
            //bind params
            $stmt->bindParam(':wish_id', $this->id);
            $stmt->bindParam(':wishlist_name', $this->wishlist_name);
            $stmt->bindParam(':products', $this->products);
            
            //execute the query
            if($stmt->execute()){
                return $this->id;
            } else {
                printf("Error %s. \n",
                      $stmt->error);
            }
            
        }
        
        
        //modifying the wishlist
        public function update(){
            //create query
           $query = 'UPDATE ' .$this->table . ' 
           SET wishlist_name = :wishlist_name, products = :products WHERE id = :id';
            
            //prepare statement
           $stmt = $this->conn->prepare($query);
            
            //clean the data
           $this->wishlist_name = htmlspecialchars(strip_tags($this->wishlist_name));
           $this->products = htmlspecialchars(strip_tags($this->products));
            
            //bind params
           $stmt->bindParam(':wishlist_name', $this->wishlist_name);
           $stmt->bindParam(':products', $this->products);
            
            //execute the query
            if($stmt->execute()){
                return true;
            } else {
                printf("Error %s. \n", $stmt->error);
            }
            
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
