<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<ul class='uk-list uk-list-divider'>

<?php foreach($data['post'] as $posts){
   echo "<li>".$posts->getText()."</li>";
    // var_dump($topic);
    
} ?>
    <p><a class="uk-button uk-button-default" href="?ctrl=home&method=index">Retour</a></p>
</body>
</html>