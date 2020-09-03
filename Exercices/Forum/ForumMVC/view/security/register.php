<form action="view/addTopic.php?action=addTopic" method="POST">
        <label for="pseudoUtilisateur">Pseudo</label>
        <input class="uk-input" type="text" name="pseudoUtilisateur" id="pseudoUtilisateur">
        <label for="password">mot de passe</label>
        <input class="uk-input" type="password" name="password" id="password">
        <input class="uk-button uk-margin-top" type="submit" value="Ajouter">
    </form>

<?php  //traitement du formulaire d'inscription
    session_start();

    require "SecurityController.php";


    // --TEST-- //

/*
        if(!empty($_POST)){
            
            $username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_REGEXP, [
                "options" => ["regexp" => "/^[a-zA-Z0-9]{4,32}/"]
            ]);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_REGEXP, [
                "options" => ["regexp" => "/^[a-zA-Z0-9!_-]{6,48}/"]
            ]);
            $password_repeat = filter_input(INPUT_POST, "password_r", FILTER_DEFAULT);
            $cgu = filter_input(INPUT_POST, "cgu", FILTER_VALIDATE_BOOLEAN);

            $pseudoUtilisateur = filter_input(INPUT_POST, "pseudoUtilisateur", FILTER_DEFAULT);
            $cgu = filter_input(INPUT_POST, "pseudoUtilisateur", FILTER_VALIDATE_BOOLEAN);

            if($username && $email && $password && $cgu && $pseudoUtilisateur){
                if($password === $password_repeat){

                    if(registerUser($username, $email, $password, $pseudoUtilisateur)){
                        
                        $_SESSION['success'] = "Inscription réussie, connectez-vous !";
                        header("Location:login.php");
                        die();
                    }
                    else $_SESSION['error'] = "Une erreur système est survenue, veuillez pleurer !";
                }
                else $_SESSION['error'] = "Les mots de passe ne correspondent pas...";
                
            }
            else $_SESSION['error'] = "Un ou des champs obligatoires sont manquants ou incorrects...";
            
        }
        else $_SESSION['error'] = "Enfoiré, t'essayes de me pirater c'est ça ?";
        
        header("Location: index.php");
*/

