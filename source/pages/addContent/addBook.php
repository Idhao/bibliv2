<?php
    include 'db.php';

    //commençons par récuperer tout les informations du form dans des variables
    $title = $_POST['title'];
    $author = $_POST['author'];
    $illustrator = $_POST['illustrator'];
    $traductor = $_POST['traductor'];
    $preface = $_POST['preface'];
    $year = $_POST['year'];
    $nbPages = $_POST['nbPages'];
    $isbn = $_POST['isbn'];
    $editor = $_POST['editor'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];

    //conversion des values non renseigné en 'NULL'
    if($illustrator === ''){
        $illustrator = 'NULL';
    }
    if($traductor === ''){
        $traductor = 'NULL';
    }
    if($preface === ''){
        $preface = 'NULL';
    }
    if($nbPages === ''){
        $nbPages = 'NULL';
    }

    //requête pour insertion dans la table Livre
    $insertLivreQuery = $pdo->prepare('
        INSERT INTO Livre
        VALUES("'.$isbn.'",
        "'.$title.'",
        "'.$editor.'",
        "'.$year.'",
        "'.$gender.'",
        "'.$language.'",
        '.$nbPages.')
        ');
    $insertLivreQuery->execute(array($isbn, $title, $editor, $year, $gender, $language, $nbPages));
    //var_dump($insertLivreQuery);

    //requête pour insertion dans la table Auteur
    $insertAuthorQuery = $pdo->prepare('
        INSERT INTO Auteur
        VALUES ("'.$author.'",
        "'.$isbn.'",
        "1")
        ');
        $insertAuthorQuery->execute(array($author, $isbn));
        //var_dump($insertAuthorQuery);

    if(isset($illustrator) != 'NULL'){
        $insertIllustratorQuery = $pdo->prepare('
            INSERT INTO Auteur
            VALUES ("'.$illustrator.'",
            "'.$isbn.'",
            "2")
            ');
            $insertIllustratorQuery->execute(array($illustrator, $isbn));
            //var_dump($insertIllustratorQuery);
    }
    
    if(isset($traductor) != 'NULL'){
        $insertTraductorQuery = $pdo->prepare('
            INSERT INTO Auteur
            VALUES ("'.$traductor.'",
            "'.$isbn.'",
            "3")
            ');
            $insertTraductorQuery->execute(array($traductor, $isbn));
            //var_dump($insertTraductorQuery);
    }

    if(isset($preface) != 'NULL'){
        $insertPrefaceQuery = $pdo->prepare('
            INSERT INTO Auteur
            VALUES ("'.$preface.'",
            "'.$isbn.'",
            "4")
            ');
            $insertPrefaceQuery->execute(array($preface, $isbn));
            //var_dump($insertPrefaceQuery);
    }



?>


<?php include 'header.php'?>
    <p>Votre livre à bien été ajouter</p>
</body>
</html>