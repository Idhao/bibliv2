<?php
    include 'db.php';

    $authorQuery ='
    SELECT DISTINCT p.nom,
    p.prenom,
    p.id
    FROM Personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    WHERE a.idRole = 1
    ';
    $authorQuery = $pdo->query($authorQuery);
    $authorList = $authorQuery->fetchAll();
?>

<form action="bookList.php" method="GET">
    <fieldset>
        <legend>Auteur :</legend>
        <?php foreach($authorList as $author): ?>
            <input type="checkbox" name="idAuthor" value="<?= $author['id']?>">
            <label for="idAuthor"><?= $author['nom']?> <?= $author['prenom']?></label><br/>
        <?php endforeach;?>
        <input type="submit" value="Rechercher !">
    </fieldset>
</form>