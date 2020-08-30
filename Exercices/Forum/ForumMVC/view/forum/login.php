<?php  //traitement du formulaire de connexion
    session_start();

    require "bdd.php";
  
    if(!empty($_POST)){
        $pseudoUtilisateurOrEmail = filter_input(INPUT_POST, 'pseudoUtilisateur', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        if($pseudoUtilisateurOrEmail && $password){
            $user = getUser($pseudoUtilisateurOrEmail, $password);
            if($user){
                $_SESSION['user'] = $user;
                $_SESSION['success'] = "Bienvenue ".$user['pseudoUtilisateur']." !";
                header("Location:index.php");
            }
            else $_SESSION['error'] = "Bad credentials !";
        }
        else $_SESSION['error'] = "Des champs obligatoires sont manquants ou incorrects !";
    }
    else $_SESSION['error'] = "Enfoiré, t'essayes de me pirater c'est ça ?";
    
    header("Location: form_login.php");