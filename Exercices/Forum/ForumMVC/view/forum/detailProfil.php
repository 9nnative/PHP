<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <p>Nom d'utilisateur : <?php echo $_SESSION['user']->getName();?><a> Modifier</a></p>
    <p>Adresse e-mail : <?php echo $_SESSION['user']->geteMail();?><a> Modifier</a></p>
    <p>Rôle : <?php echo $_SESSION['user']->getRole();?>

</body>
</html>