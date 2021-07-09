<?php
    class Product{
        private $category;
        private $name;
        private $price;
        private $quantity;
        private $imageUrl;

        function __construct($category,$name,$quantity,$imageUrl = "")
        {
            $this->category = $category;
            $this->name = $name;
            $this->quantity = $quantity;
            $this->imageUrl = $imageUrl;
        }

        public function setPrice($price){
            $this->price = number_format($price, 2);
            return $this->price;
        }
    }