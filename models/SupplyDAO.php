<?php

    require_once __DIR__."../../config/Banco.php";
    require_once("Supply.php");

    class SupplyDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Supply $supply){
            
            $stm = Banco::getInstance()->prepare("
                INSERT INTO supply(id_product, id_proposal, amount, value) 
                VALUES (:id_product, :id_proposal, :amount, :value)
            ");

            $stm->bindParam('id_product', $supply->id_product);
            $stm->bindParam('id_proposal', $supply->id_proposal);
            $stm->bindParam('amount', $supply->amount);
            $stm->bindParam('value', $supply->value);

            $stm->execute();
        }

        // public function findProposal() {

        //     $stmt= Banco::getInstance()->query("
        //         SELECT id, id_supply, id_provider, amount, value 
        //         FROM proposal",
        //     );
            
        //     $stmt->execute();

        //     return $stmt->fetchAll(PDO::FETCH_OBJ);

        // }

    }

?>