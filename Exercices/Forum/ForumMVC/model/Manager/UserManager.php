<?php
    namespace Model\Manager;
    use App\Router;
    use App\AbstractManager;
    
    class UserManager extends AbstractManager
    {
        private static $classname = "Model\Entity\User";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT u.id, name, password, email, role
                    FROM user u
                    ORDER BY date DESC";

            return self::getResults(
                self::select($sql,
                    null, 
                    true
                ), 
                self::$classname
            );
        }

        public function findOneById($id){
            $sql = "SELECT * 
                        FROM user 
                        WHERE id = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }
        
        public function managerLogin(){
                     //traitement du formulaire de connexion

            
                if(!empty($_POST)){
                    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                    if($username && $password){
                        $user = getName($username, $password);
                        if($user){
                            $_SESSION['name'] = $user;
                            $_SESSION['success'] = "Bienvenue ".$user['name']." !";
                            header("Location:index.php");
                        }
                        else $_SESSION['error'] = "Bad credentials !";
                    }
                    else $_SESSION['error'] = "Des champs obligatoires sont manquants ou incorrects !";
                }
                else $_SESSION['error'] = "Enfoiré, t'essayes de me pirater c'est ça ?"; 
            }


    
        public function managerRegister(){
            
            if(!empty($_POST)){
                $username = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_REGEXP, [
                    "options" => ["regexp" => "/^[a-zA-Z0-9]{4,32}/"]
                ]);
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $password_r = filter_input(INPUT_POST, 'password_r', FILTER_SANITIZE_STRING);
    
                if($username && $email && $password){
                    if($password === $password_r){            
                        
                            $stmt =(
                                "INSERT INTO user (name, password, email) ".
                                "VALUES (:name, :password, :email)"
                            );

                    self::createUser($stmt, ["name" => strtolower($username),

                                        "password" => password_hash($password, PASSWORD_ARGON2I),

                                        "email"    => $email]);
                            $_SESSION['success'] = "Inscription réussie, connectez-vous !";
                            header("Location:index.php");
                            die();
                        }
    
                    }
                    else $_SESSION['error'] = "Les mots de passe ne correspondent pas !";
                }
                else $_SESSION['error'] = "Vous devez remplir TOUS les champs obligatoires !";
            }
            
    
           // Router::redirectTo();
    
        
    }