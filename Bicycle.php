<?php

    class Bicycle {
        private $color;
        private $currentSpeed;
        private $nbSeats = 1;
        private $nbWheels = 2;

        public function __construct($color){
            $this->color = $color;
        }

        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function getCurrentSpeed(){
            return $this->currentSpeed;
        }

        public function setCurrentSpeed($currentSpeed){
            $this->currentSpeed = $currentSpeed;
        }

        public function forward(){
            $this->currentSpeed = 15;
            return "Go !";
        }

        public function brake(){
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }
            $sentence .= "I'm stopped !";
            return $sentence;
        }

        public function dump(){
            var_dump($this);
        }

    }