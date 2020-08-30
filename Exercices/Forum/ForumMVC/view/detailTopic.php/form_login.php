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
    <p><?php
        if(isset($_SESSION['success'])){
            echo "VERT : ".$_SESSION['success'];
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error'])){
            echo "ROUGE : ".$_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?></p>
    <?php
        if(!isset($_SESSION['user'])){
            ?>
            <form action="login.php" method="post">
                <p><input type="text" name="pseudoUtilisateur" required placeholder="Nom d'utilisateur ou e-mail"></p>
                <p><input type="password" name="password" required placeholder="Mot de passe"></p>
                <p><input type="submit" value="Se connecter"></p>
            </form>
            <?php
        }
        else{
            ?>
            <a href="logout.php">Déconnexion</a>
            <?php
        }
    ?>
</body>
</html>