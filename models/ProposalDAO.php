<?php

    require_once __DIR__."../../config/Banco.php";
    require_once("Proposal.php");

    class ProposalDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Proposal $proposal){
            
            $stm = Banco::getInstance()->prepare("
                INSERT INTO proposal(id_supply, id_provider, amount, value) 
                VALUES (:id_supply, :id_provider, :amount, :value)
            ");

            $stm->bindParam('id_supply', $proposal->id_supply);
            $stm->bindParam('id_provider', $proposal->id_provider);
            $stm->bindParam('amount', $proposal->amount);
            $stm->bindParam('value', $proposal->value);

            $stm->execute();
        }

        public function findProposal() {

            $stmt= Banco::getInstance()->query("
                SELECT id, id_supply, id_provider, amount, value 
                FROM proposal",
            );
            
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function dropProposal(int $id){

            $stmt = Banco::getInstance()->query("
                DELETE FROM proposal
                WHERE id=\"$id\"", PDO::FETCH_OBJ
            );
            
            $stmt->execute();

            return $stmt->fetchAll();    
        }

    }

?>