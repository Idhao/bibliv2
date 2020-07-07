<?php session_start();
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Wen Chang</title>
    <meta charset="utf-8">
    <!-- <link href="css/main.css" rel="stylesheet"> -->
</head>

<body>
    <header>
        <img src="/bibliv2/source/img/biblilogo.png" alt="logo du site">
        <nav>
            <ul>
                <li><a href="/bibliv2/source/index.php">
                        <h1>Wen Chang</h1>
                    </a></li>
                <li><a href="/bibliv2/source/pages/bookList.php">Tous nos livres</a></li>
                <?php
                    if($_SESSION['niveauAcces'] == 2){
                        echo('<li><a href="/bibliv2/source/pages/gestionMembre.php">Gestion des membres</a></li>');
                        echo('<li><a href="/bibliv2/source/pages/addContent/formAddBook.php">Ajout de contenu</a></li>');
                    }

                    if(isset($_SESSION['id']) AND isset($_SESSION['username'])){
                        echo('<li><a href="/bibliv2/source/pages/panier.php">Mon panier</a></li>');
                        echo('<li><a href="/bibliv2/source/pages/deconnexion.php">Déconnexion</a></li>');
                        echo('<li><a href="/bibliv2/source/pages/espacePerso.php">Mon compte</a></li>');
                    }
                    else{
                        echo('<li><a href="/bibliv2/source/pages/inscription.php">Connexion<br/>Inscription</a></li>');
                    }
                ?>
            </ul>
        </nav>
    </header>