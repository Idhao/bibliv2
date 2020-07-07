<?php include '../includes/header.php';

if(isset($_GET['searchInfo']) && $_GET['searchInfo'] != NULL){
    $searchQuery='
            SELECT DISTINCT l.titre,
            l.annee,
            l.isbn,
            p.nom, 
            p.prenom, 
            g.libelle AS Genre,
            e.libelle AS Editeur
            FROM Livre l
            JOIN Auteur a
                ON l.isbn = a.idLivre
            JOIN Personne p
                ON a.idPersonne = p.id
            JOIN Genre g
                ON l.genre = g.id
            JOIN Editeur e
                ON l.editeur = e.id
            WHERE p.nom LIKE "%'.$_GET['searchInfo'].'%" 
            OR p.prenom LIKE "%'.$_GET['searchInfo'].'%" 
            OR e.libelle LIKE "%'.$_GET['searchInfo'].'%" 
            OR g.libelle LIKE "%'.$_GET['searchInfo'].'%" 
            OR l.titre LIKE "%'.$_GET['searchInfo'].'%";
            ';
    $searchQuery =$pdo->query($searchQuery);
    $booksList = $searchQuery->fetchAll();
    // var_dump($booksList);
}
else if(isset($_GET['idAuthor'])){
    $sortQuery =' 
            SELECT l.titre,
            l.annee,
            l.isbn,
            p.nom, 
            p.prenom, 
            g.libelle AS Genre,
            e.libelle AS Editeur
            FROM Livre l
            JOIN Auteur a
                ON l.isbn = a.idLivre
            JOIN Personne p
                ON a.idPersonne = p.id
            JOIN Genre g
                ON l.genre = g.id
            JOIN Editeur e
                ON l.editeur = e.id
            WHERE p.id = '.$_GET["idAuthor"].';
            ';

    $sortQuery = $pdo->query($sortQuery);
    $booksList = $sortQuery->fetchAll();
    // var_dump($booksList);
}
else{
    $query =' 
            SELECT l.titre,
            l.annee,
            l.isbn,
            p.nom, 
            p.prenom, 
            g.libelle AS Genre,
            e.libelle AS Editeur
            FROM Livre l
            JOIN Auteur a
                ON l.isbn = a.idLivre
            JOIN Personne p
                ON a.idPersonne = p.id
            JOIN Genre g
                ON l.genre = g.id
            JOIN Editeur e
                ON l.editeur = e.id
            WHERE a.idRole = 1;
            '; //On stock d'abord la reqête dans une variable

    $query = $pdo->query($query);//$query prend pour valeur le résulat de la requete effectuer dans la bdd
    $booksList = $query->fetchAll();//on stock ce résultat dans une nouvelle variable de type tableau
    //print_r($booksList);
}

?>


    <section>
    <?php include '../includes/search.php'?>
    <aside><?php include '../includes/chkBoxAuthor.php'?></aside>
    <?php foreach($booksList as $info): ?>
        <a href="bookDetails.php?isbn=<?= ($info['isbn'])?>">
        <article>
            <?php
                $image="../img/".$info['isbn'].".jpg";
                if(file_exists($image)){
                    echo '<img src="'.$image.'" alt="Couverture du livre">'; 
                }
                else{
                    echo '<img src="../img/default.jpg" alt="Couverture du livre">';
                }
            ?>
            <h2><?= $info['titre']?></h2>
            <h3><?= $info['annee']?></h3>
            <h3><?= $info['nom']?> <?= $info['prenom']?></h3>
            <h3><?= $info['Genre']?></h3>
        </article>
        </a>
        <?php endforeach; ?>
    </section>
    
</body>

</html>
