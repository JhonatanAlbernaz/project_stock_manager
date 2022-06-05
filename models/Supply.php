<?php

    class Supply {
        public int $id_product;
        public int $id_proposal;
        public int $amount;
        public string $value;

        public function __construct(int $id_product, int $id_proposal, int $amount, string $value){
            $this->id_product = $id_product;
            $this->id_proposal = $id_proposal;
            $this->amount = $amount;
            $this->value = $value;
        }
    }
    
?>