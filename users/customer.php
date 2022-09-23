<?php
    require_once __DIR__ . '/user.php';

    class Customer extends User {
        protected $customerId = null;

        public function __construct($name, $surname, $age = null, $customerId)
        {
            parent::__construct($name, $surname, $age);
            $this->customerId = $customerId;
        }

        public function getCustomerInfo() {
            return "Cliente". $this->name . ' ' . $this->surname . "ID Cliente" . $this->referenceNumber . "<br>";
        }
    }
?>