<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<ul class='uk-list uk-list-divider'>

<?php 

foreach($data['posts'] as $post){?>
   <li><?= strftime('%H:%M | %d %B %Y', strtotime((new DateTime($post->getDate()))->format('Y-m-d H:i:s')))?><br><a href ="?ctrl=forum&method=show&topic_id=<?= $post->getId() ?>"><?= $post->getText() ?></a></li>

    
    <?php var_dump($post); } ?>
    <p><a class="uk-button uk-button-default" href="?ctrl=home&method=index">Retour</a></p>
</body>
</html>