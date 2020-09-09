<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <section id="User">
    <p uk-icon="icon: user"></p>
    <h3>
    <?php 
    echo $data['user']->getName();?>
    </h3>
    </section>

<?php
echo $data['posts']->getText()?>

<br>

<?php
echo $data['posts']->getDate()?>


    <a class="uk-button uk-button-default" href="?ctrl=home&method=index">Répondre</a>
</body>
</html>