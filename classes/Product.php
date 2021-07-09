<?php
    require_once __DIR__ . "/Category.php";
    class Product extends Category{
        private $category;
        private $name;
        private $price;
        private $quantity;
        private $imageUrl;

        function __construct($category,$name,$quantity,$imageUrl = "", $categoryName)
        {
            parent::__construct($categoryName);
            $this->category = $category;
            $this->name = $name;
            $this->quantity = $quantity;
            $this->imageUrl = $imageUrl;
            $this->categoryName = $categoryName;
        }

        public function setPrice($price){
            $this->price = number_format($price, 2);
            return $this->price;
        }

        public function getPrice(){
            $price = $this->price;
            $this->getDiscount();
            return number_format($price - ($price * $this->discount / 100), 2,",",".");
        }
    }