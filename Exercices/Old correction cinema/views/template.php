<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $titre ?></title>
</head>
<body>
    <h1>Gestion films avec PDO</h1>
    <select id ="liste" name="forma" onchange="location = this.value;">
            <option value="index.php?action=listFilms">Liste des films</option>
            <option value="index.php?action=listReals">Liste des réalisateurs</option>
            <option value="...">Liste des acteurs</option><br/><br/>
</select>
    <div id="contenu"> 
        <?= $contenu ?>
    </div>
</body>
</html>