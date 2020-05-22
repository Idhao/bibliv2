<?php
    include 'db.php'; // Connexion bdd
    
    $isbn = $_GET['isbn'];

    $detailsQuery = '
         SELECT l.titre,
         l.isbn,
         l.annee,
         l.resume,
         g.libelle AS Genre,
         e.libelle AS Editeur
         FROM Livre l
         JOIN Genre g
             ON l.genre = g.id
         JOIN Editeur e
             ON l.editeur = e.id
         WHERE l.isbn = "'.$isbn.'"
    ';//utiliser la variable isbn
    $detailsQuery = $pdo->query($detailsQuery);
    $bookDetails = $detailsQuery->fetchAll();


    $authorQuery = '
    SELECT p.nom,
    p.prenom,
    r.libelle
    FROM personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    JOIN Role r
         ON a.idRole = r.id
    WHERE a.idLivre = '.$isbn.'
    ';
    $authorQuery = $pdo->query($authorQuery);
    $authorDetails = $authorQuery->fetchAll();
?>

<?php include 'header.php' ?>

    <section>
        <article>
        <?php foreach($bookDetails as $info):?>
            <?php
                $image="img/".$info['isbn'].".jpg";
                if(file_exists($image)){
                    echo '<img src="'.$image.'" alt="Couverture du livre">'; 
                }
                else{
                    echo '<img src="img/default.jpg" alt="Couverture du livre">';
                }
            ?>
            <h2><?= $info['titre']?></h2>
            <?php foreach($authorDetails as $author):?>
            <h3><?= $author['libelle']?> : <?= $author['nom']?> <?= $author['prenom']?></h3>
            <?php endforeach;?>
            <h3>Isbn 10 : <?= $info['isbn']?></h3>
            <h3>Année de parution : <?= $info['annee']?></h3>
            <h3>Genre : <?= $info['Genre']?></h3>
            <h3>Éditeur : <?= $info['Editeur']?></h3>
            <p><?= $info['resume']?></p>
            <?php endforeach;?>
        </article>
    </section>
</body>
</html>