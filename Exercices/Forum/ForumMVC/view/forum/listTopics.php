<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://raw.githubusercontent.com/9nnative/PHP/master/Exercices/Forum/ForumMVC/public/js/scripts.js">
    </script>
  
</head>
<body>

<ul class='uk-list uk-list-divider'>

<?php foreach($data['topics'] as $topic){ ?>


   <li><a href="?ctrl=forum&method=show&topic_id=<?= $topic->getId() ?>"><?= $topic->getTitle() ?></a></li>
    
    
<?php } ?>
    <p><a class="uk-button uk-button-default" href="?ctrl=home&method=index">Retour</a></p>
</body>
</html>