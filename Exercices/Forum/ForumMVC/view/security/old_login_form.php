<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
                    <p><input type="text" name="pseudoUtilisateur" required placeholder="Nom d'utilisateur ou e-mail"></p>
                    <p><input type="password" name="password" required placeholder="Mot de passe"></p>
                    <p><input type="submit" value="Se connecter"></p>
                </form>

<?php  //traitement du formulaire de connexion

  
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


           header("Location:./view/forum/login_form.php"); ?>

</body>
</html>