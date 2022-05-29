<?php

    class Product {
        public string $name;
        public string $value;
        public string $description;
        public string $image;

        public function __construct(string $name ,string $value, string $description, string $image){
            $this->name = $name;
            $this->value = $value;
            $this->description = $description;
            $this->image = $image;
        }
    }
    
?>