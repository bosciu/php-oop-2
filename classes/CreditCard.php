<?php
    class CreditCard{
        private $cardNumber;
        private $expirationDate;
        private $ccv;


        function setCreditCard($cardNumber, $expirationDate, $ccv){
            $this->cardNumber = $cardNumber;
            $this->expirationDate = $expirationDate;
            $this->ccv = $ccv;
        }

    }