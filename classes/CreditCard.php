<?php  
    class CreditCard{
        private $cardNumber;
        private $expirationDate;
        private $ccv;

        function __construct($cardNumber, $expirationDate, $ccv)
        {
            $this->cardNumber = $cardNumber;
            $this->expirationDate = $expirationDate;
            $this->ccv = $ccv;
        }

        function getCreditCard(){
            return ["numero_carta"=>$this->cardNumber,"data_scadenza"=>$this->expirationDate,"codice_segreto"=>$this->ccv];
        }

    }