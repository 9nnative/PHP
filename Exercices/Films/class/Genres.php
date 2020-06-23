<?php

    class Genres {
        private $nomgenre;


        public  function __construct($nomgenre){

            $this->$nomgenre = $nomgenre;
            }
    

        /**
         * Get the value of NomGenre
         */ 
        public function getNomGenre()
        {
                return $this->nomgenre;
        }

        /**
         * Set the value of NomGenre
         *
         * @return  self
         */ 
        public function setNomGenre($nomgenre)
        {
                $this->nomgenre = $nomgenre;

                return $this;
        }



    }

