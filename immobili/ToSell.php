<?php
    require_once __DIR__ . '/Immobile.php';

    class ToSell extends Immobile {

        protected $pricePerMq;

        public function __construct($kind, $adress, $size = null, $pricePerMq = 3000)
        {
            parent::__construct($kind, $adress, $size = null);
            $this->pricePerMq = $pricePerMq;
        }

        public function getPrice() {
            return $this->size * $this->pricePerMq;
        }
    }
?>