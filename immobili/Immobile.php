<?php
    class Immobile {
        public $kind;
        public $adress;
        public $size;

        public function __construct($kind, $adress, $size = null)
        {
            $this->kind = $kind;
            $this->adress = $adress;
            $this->size = $size;

        }

        public function getInfoImmobile() {
            return $this->kind . " situato a " . $this->adress . " della grandezza di " . $this->size . '<br>';
        }
    }
?>