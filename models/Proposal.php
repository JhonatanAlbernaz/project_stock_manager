<?php

    class Proposal {
        public int $id_supply;
        public int $id_provider;
        public int $amount;
        public string $value;

        public function __construct(int $id_supply, int $id_provider, int $amount, string $value){
            $this->id_supply = $id_supply;
            $this->id_provider = $id_provider;
            $this->amount = $amount;
            $this->value = $value;
        }
    }
    
?>