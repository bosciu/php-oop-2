<?php
    class Category{
        private $categoryName;
        protected $discount = 0;

        function __construct($categoryName)
        {
            $this->categoryName = $categoryName;
        }

        private function setDiscount(){
            switch($this->categoryName){
                case "alimentari":
                    $this->discount = 10;
                    break;
                case "informatica":
                    $this->discount = 5;
                    break;
                case "bellezza":
                    $this->discount = 8;
            }
        }

        public function getDiscount(){
            $this->setDiscount();
        }
    }