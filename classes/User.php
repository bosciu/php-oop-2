<?php
    class User{
        private $name;
        private $surname;
        private $age;
        private $email;
        private $creditCard;

        function __construct($name, $surname, $age, $email)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
        }

        public function setCreditCard($cardNumber){
            $this->creditCard = $cardNumber;
        }
    }