<?php

    class Product{
        //db stuff
        private $conn;
        private $table = 'products';
        
        
        //product properties
        public $id;
        public $category_id;
        public $category_name;
        public $name;
        public $price;
        public $decription;
        public $stock;
        public $product_img;
        public $created_at;
        
        
        //constructor for db connection
        public function __construct($db){
            $this->conn = $db;
        }
        
        
        //getting all products
        public function read(){
            //create query
            $query = 'SELECT
                c.name as category_name,
                p.id,
                p.category_id,
                p.name,
                p.price,
                p.description,
                p.stock,
                p.product_img,
                p.created_at
                FROM '.$this->table . ' p LEFT JOIN categories c ON p.category_id=c.id ORDER BY p.created_at DESC';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);
            
            //execute the query
            $stmt->execute();
            
            return $stmt;
        }
        
        
        //reading a single product
        public function read_single(){
            //create query
            $query = ' SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.name,
            p.price,
            p.description,
            p.stock,
            p.product_img,
            p.created_at 
            FROM '.$this->table . ' p LEFT JOIN 
            categories c ON p.category_id = c.id WHERE 
            p.id=? LIMIT 1';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);
            
            //bind params
            $stmt->bindParam(1, $this->id);
            
            //execute query
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->name = $row['name'];
            $this->price = $row['price'];
            $this->description = $row['description'];
            $this->stock = $row['stock'];
            $this->product_img = $row['product_img'];
            $this->category_id = $row['category_id'];
            $this->category_name = $row['category_name'];
        }
        
        
        //creating a new product
        public function create(){
            //create query
            $query = 'INSERT INTO ' .$this->table . 
                ' SET name = :name, price = :price, description = :description, stock = :stock, product_img = :product_img, category_id = :category_id';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);
            
            //cleaning the data
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->price = htmlspecialchars(strip_tags($this->price));
            $this->description = htmlspecialchars(strip_tags($this->description));
            $this->stock = htmlspecialchars(strip_tags($this->stock));
            $this->product_img = htmlspecialchars(strip_tags($this->product_img));
            $this->category_id = htmlspecialchars(strip_tags($this->category_id));
            
            //bind params
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':stock', $this->stock);
            $stmt->bindParam(':product_img', $this->product_img);
            $stmt->bindParam(':category_id', $this->category_id);
            
            //execute the query
            if($stmt->execute()){
                return true;
            } else {
                printf("Error %s. \n",
                      $stmt->error);
                return false;
            }
            
        }
        
        
        //modifying the product
        public function update(){
            //createe query
            $query = 'UPDATE ' .$this->table . ' 
            SET name = :name, price = :price, description = :description, stock = :stock, product_img = :product_img, category_id = :category_id WHERE id = :id';
            
            //prepare statement
            $stmt = $this->conn->prepare($query);
            
            //clean the data
            $this->name = htmlspecialchars(strip_tags($this->name));
            $this->price = htmlspecialchars(strip_tags($this->price));
            $this->description = htmlspecialchars(strip_tags($this->description));
            $this->stock = htmlspecialchars(strip_tags($this->stock));
            $this->product_img = htmlspecialchars(strip_tags($this->product_img));
            $this->category_id = htmlspecialchars(strip_tags($this->category_id));
            $this->id = htmlspecialchars(strip_tags($this->id));
            
            //bind params
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':stock', $this->stock);
            $stmt->bindParam(':product_img', $this->product_img);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':id', $this->id);
            
            
            //execute the query
            if($stmt->execute()){
                return true;
            } else {
                printf("Error %s. \n", $stmt->error);
                return false;
            }
        }
        
        
        //deleting a product  (admin function)
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