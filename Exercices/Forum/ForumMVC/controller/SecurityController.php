<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;

    class SecurityController{

        public function formLogin(){

            return [
                "view" => "security/login.php",
                "titrePage" => "FORUM | Se connecter"
            ];
        }
    }