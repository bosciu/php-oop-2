<?php
    class User{
        private $name;
        private $surname;
        private $age;
        private $email;
        private $ordersHistory;
        private $personalDiscount = 0;
        private $creditCard = [];

        function __construct($name, $surname, $age, $email, $ordersHistory = [2,2,2,])
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
            $this->ordersHistory = $ordersHistory;
        }


        public function setOrdersHistory($orders){
            $this->ordersHistory = $orders;
            $this->getPersonalDiscount();
        }

        private function getPersonalDiscount(){
            if(count($this->ordersHistory)>4){
                $this->personalDiscount = 20;
            }else if(count($this->ordersHistory)>2){
                $this->personalDiscount = 10;
            }
        }

        public function insertCreditCard($creditCard){
            $this->creditCard = $creditCard;
        }
    }