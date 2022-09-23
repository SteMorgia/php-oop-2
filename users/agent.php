<?php
    require_once __DIR__ . '/user.php';

    class Agent extends User {
        protected $referenceNumber = null;

        public function __construct($name, $surname, $referenceNumber, $age = null)
        {
            parent::__construct($name, $surname, $age);
            $this->referenceNumber = $referenceNumber;
        }

        public function getAgentInfo() {
            return "Agente". $this->name . ' ' . $this->surname . "Numero Referenza" . $this->referenceNumber . "<br>";
            
        }
    }
?>