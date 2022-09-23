<?php
    class User {
        public $name;
        public $surname;
        public $age;


        public function __construct($name, $surname, $age = null)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

        public function getFullName() {
            return $this->name . ' ' . $this->surname . "<br>";
        }
    }
?>