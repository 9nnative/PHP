<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;
    use Model\Manager\UserManager;
    
    class SecurityController{

        public function formLogin(){

            return [
                "view" => "security/login.php",
                "titrePage" => "FORUM | Se connecter"
            ];
        }

        public function formRegister(){

            

            return [
                "view" => "security/register.php",
                "titrePage" => "FORUM | S'inscrire"
            ];
        }
        public function goRegister(){

            $manager = new UserManager();
            $registermanager = $manager->ManagerRegister();

        return [
            "view" => "security/register.php",
            "titrePage" => "FORUM | S'inscrire"
        ];
        }
        public function goLogin(){

            $manager = new UserManager();
            $loginmanager = $manager->ManagerLogin();

        return [
            "view" => "security/login.php",
            "titrePage" => "FORUM | Se connecter"
        ];
        }

    }

    