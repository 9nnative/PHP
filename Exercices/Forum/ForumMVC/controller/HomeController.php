<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;     
   
    class HomeController {
        /**
         * Afficher la page d'accueil
         */
        public function index(){

            return [
                "view" => "forum/home.php", 
                "data" => null,
                "titrePage" => "FORUM | Accueil"
            ];
        }

        /**
         * Afficher le réglement du forum
         */
        public function rules(){
            return [
                "view" => "forum/rules.php",
                "data" => null,
                "titrePage" => "FORUM | Réglement du forum"
            ];
        }

        /**
         * Afficher les mentions légales
         */
        public function mentions(){
            return [
                "view" => "forum/mentions.php",
                "data" => null,
                "titrePage" => "FORUM | Mentions légales"
            ];
        }
    }