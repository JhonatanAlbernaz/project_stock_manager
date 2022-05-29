<?php

    require_once __DIR__."../../config/Banco.php";
    require_once("Product.php");

    class ProductDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Product $product){
            
            $stm = Banco::getInstance()->prepare("
                INSERT INTO product(name, value, description, image) 
                VALUES (:name, :value, :description, :image)
            ");

            $stm->bindParam('name', $product->name);
            $stm->bindParam('value', $product->value);
            $stm->bindParam('description', $product->description);
            $stm->bindParam('image', $product->image);

            $stm->execute();
        }

        public function findProducts() {

            $stmt= Banco::getInstance()->query("
                SELECT id, name, value, image FROM product",
            );
            
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function find(int $id){

            $stmt = Banco::getInstance()->query("
                SELECT * FROM product
                WHERE id=\"$id\"", PDO::FETCH_OBJ
            );
            
            $stmt->execute();

            return $stmt->fetch();    
        }

    }

?>