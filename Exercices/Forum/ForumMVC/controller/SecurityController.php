<?php

namespace Controller;

use App\Session;
use App\Router;
use Model\Manager\TopicManager;
use Model\Manager\PostManager;
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

    if(!empty($_POST)){
    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if($username && $password){

    $manUser = new UserManager();
    $test = $manUser->getUserByUsername($username);

    if (password_verify($password, $test->getPassword())) {
    $user = $manUser->findOneById($test->getID());
    $_SESSION['user'] = $user;
    $_SESSION['success'] = "Bienvenue ".$user->getName()." !";
    router ::RedirectTo('home', 'index');

    }
    else $_SESSION['error'] = "‼ Bad credentials ‼";
    }
    else $_SESSION['error'] = "‼ Des champs obligatoires sont manquants ou incorrects ‼";
    }
    else $_SESSION['error'] = "‼ Enfoiré, t'essayes de me pirater c'est ça ? ‼"; }

public function logout(){
    unset($_SESSION['user']);
    Router::redirectTo("home","index");
}
public function profil(){
    return[
        
        "view" =>"forum/detailProfil.php",
        "titrePage" =>"FORUM | Détail du profil"
    ];

}

}

