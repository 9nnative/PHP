<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">

    
    <!-- Local CSS -->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/9nnative/PHP/master/Exercices/Forum/ForumMVC/public/css/stylesheet.css"/>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit-icons.min.js"></script>
    
    <link rel="stylesheet" href="<?= CSS_PATH ?>stylesheet.css">
    <title><?= $titrePage ?></title>
</head>
<body>
    <!-- ------------------ NAV ------------------ -->
    <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="?ctrl=home&method=index" uk-icon="icon: home">Acceuil&nbsp;</a></li>
            <li>
                <a href="#" uk-icon="icon: menu">Menu&nbsp;</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-nav-header">Forum</li>
                        <li><a href="?ctrl=forum&method=allTopics" uk-icon="icon: list">Liste des sujets&nbsp;</a></li>
                        <li><a href="#" uk-icon="icon: users">Utilisateurs inscrits&nbsp;</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#" uk-icon="icon: info">Informations&nbsp;</a></li>
                    </ul>
                </div>
            </li>

        </ul>

    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li class="login_register"><a href="?ctrl=security&method=formLogin" uk-icon="icon: sign-in" class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-usage">Se connecter&nbsp;</a>
            <li class="login_register"><a href="?ctrl=forum&method=register" uk-icon="icon: file-edit">S'inscrire&nbsp;</a></li>
</ul>

</div>
</nav>

    <!-- ------------------ MAIN ------------------ -->
    <section id="mainsection">

        <div id="wrapper" class="uk-container uk-container-expand">
            <div id="mainPage">
                <main>
                    <h1>FORUM</h1><hr>
                    <div id="page">
                        <?= $page ?>
                    </div>
                </main>
            </div>
            
    </section>

        <footer>
            <p>
                &copy;2020 - COPYRIGHT - <a href="?ctrl=home&method=rules">Règlement du forum</a> - <a href="?ctrl=home&method=mentions">Mentions légales</a>
            </p>
        </footer>

    </div>
</body>
</html>