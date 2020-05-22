<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Wen Chang</title>
    <meta charset="utf-8">
    <!-- <link href="css/main.css" rel="stylesheet"> -->
</head>

<body>
    <header>
        <img src="img/biblilogo.png" alt="logo du site">
        <nav>
            <ul>
                <li><a href="index.php">
                        <h1>Wen Chang</h1>
                    </a></li>
                <li><a href="bookList.php">Tous nos livres</a></li>
                <?php
                    if(isset($_SESSION['id']) AND isset($_SESSION['username'])){
                        echo('<li><a href="deconnexion.php">Déconnexion</a></li>');
                    }
                    else{
                        echo('<li><a href="inscription.php">Connexion<br/>Inscription</a></li>');
                    }
                ?>
            </ul>
        </nav>
    </header>