<?php

    class Rea {

        private $nomrea;
        private $datedenaissance;



        public  function __construct($nomrea, $datedenaissance){

            $this->$nomrea = $nomrea;
            }
        public function getNomrea()
        {
                return $this->nomrea;
        }

        public function setNomrea($nomrea)
        {
                $this->nomrea = $nomrea;

                return $this;
        }

        public function getDatedenaissance()
        {
                return $this->datedenaissance;
        }

        public function setDatedenaissance($datedenaissance)
        {
                $this->datedenaissance = $datedenaissance;

                return $this;
        }

        public function __toString() {
                return $this->nomrea.". Aujourd'hui, il a ";  
            }
    }


