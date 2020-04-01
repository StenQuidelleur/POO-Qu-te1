<?php

    class Car {
        private $nbWheels = 4;
        private $currentSpeed;
        private $color;
        private $nbSeats;
        private $energy;
        private $energyLevel;

        public function __construct($color, $nbSeats, $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

        public function forward(){
            $this->currentSpeed = 70;
            return "Wouuuuhouuu !";
        }

        public function brake(){
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Stooooooop !!!";
            }
            $sentence .= "File moi le volant  !";
            return $sentence;
        }

        public function start(){
            return "Vas-y tournes la clé !";
        }

        public function getNbWheels()
        {
            return $this->nbWheels;
        }
        public function setNbWheels($nbWheels)
        {
            $this->nbWheels = $nbWheels;
        }

        public function getCurrentSpeed()
        {
            return $this->currentSpeed;
        }
        public function setCurrentSpeed($currentSpeed)
        {
            $this->currentSpeed = $currentSpeed;
        }

        public function getColor()
        {
            return $this->color;
        }
        public function setColor($color)
        {
            $this->color = $color;
        }

        public function getNbSeats()
        {
            return $this->nbSeats;
        }
        public function setNbSeats($nbSeats)
        {
            $this->nbSeats = $nbSeats;
        }

        public function getEnergy()
        {
            return $this->energy;
        }
        public function setEnergy($energy)
        {
            $this->energy = $energy;
        }

        public function getEnergyLevel()
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel($energyLevel)
        {
            $this->energyLevel = $energyLevel;
        }



    }