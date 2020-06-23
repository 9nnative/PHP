<?php

    class Genres {

        private $nomgenre;


        public  function __construct($nomgenre){

            $this->$nomgenre = $nomgenre;
            }
    
        public function getNomGenre()
        {
                return  $this->nomgenre;
        }


        public function setNomGenre($nomgenre)
        {
               

                return $this;
        }
        public function __toString() {
            return $this->nomgenre." Et a été réalisé par :";  
        }


    }

