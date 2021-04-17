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
            $this->category_id = $row['category_id'];
            $this->category_name = $row['category_name'];
        }
        
        
        //creating a new product
//        public function create(){
//            //create query
//            $query = 'INSERT INTO ' .$this->table . 
//                ' SET name = :name, body'
//        }
        
    }

?>