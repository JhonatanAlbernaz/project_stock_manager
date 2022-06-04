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
                INSERT INTO proposal(id_provider, amount, value) 
                VALUES (:id_provider, :amount, :value)
            ");

            $stm->bindParam('id_provider', $proposal->id_provider);
            $stm->bindParam('amount', $proposal->amount);
            $stm->bindParam('value', $proposal->value);

            $stm->execute();
        }

    }

?>