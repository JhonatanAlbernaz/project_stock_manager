<?php

    class Proposal {
        public int $id_provider;
        public int $amount;
        public string $value;

        public function __construct(int $id_provider, int $amount, string $value){
            $this->id_provider = $id_provider;
            $this->amount = $amount;
            $this->value = $value;
        }
    }
    
?>