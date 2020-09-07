<?php
    session_start();
    unset($_SESSION['user']);
    $_SESSION['success'] = "Déconnexion réussie, à bientôt !";
    header("Location: login.php");
    