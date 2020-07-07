<?php include '../includes/header.php';
    
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

    <section>
        <article>
        <?php foreach($bookDetails as $info):?>
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
    <?php
    echo('<a href="bookDetails.php?isbn='.$isbn.'&action=ajout">Ajouter au panier</a>');
if (isset($_GET['isbn']) && isset($_GET['action'])) {
    echo $_GET['isbn'] . "<br>"; 
    //Verifie que le panier existe
    if (!isset($_SESSION['panier'])) {
        //creer la variable de session panier
        $_SESSION['panier'] = array();
    }
    //ajouter le produit au panier
    //Si produit présent dans le panier
    if (isset($_SESSION['panier'][$_GET['isbn']])) {
        $_SESSION['panier'][$_GET['isbn']]++;
    } else {
        //si le produit n'est pas présent
        $_SESSION['panier'][$_GET['isbn']] = 1;
    }
} else {
    echo "Pas de isbn <br>";
    //ne pas ajouter de produit au panier
}


var_dump($_SESSION['panier']);

?>
</body>
</html>