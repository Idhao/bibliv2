<?php
    include 'db.php';

    $authorQuery ='
    SELECT DISTINCT p.nom,
    p.prenom,
    p.id
    FROM Personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    JOIN Role r
         ON a.idRole = r.id
    WHERE a.idRole = 1
    ';
    $authorQuery = $pdo->query($authorQuery);
    $authorList = $authorQuery->fetchAll();

    $illustratorQuery ='
    SELECT DISTINCT p.nom,
    p.prenom,
    p.id
    FROM Personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    JOIN Role r
         ON a.idRole = r.id
    WHERE a.idRole = 2
    ';
    $illustratorQuery = $pdo->query($illustratorQuery);
    $illustratorList = $illustratorQuery->fetchAll();

    $traductorQuery ='
    SELECT DISTINCT p.nom,
    p.prenom,
    p.id
    FROM Personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    JOIN Role r
         ON a.idRole = r.id
    WHERE a.idRole = 3
    ';
    $traductorQuery = $pdo->query($traductorQuery);
    $traductorList = $traductorQuery->fetchAll();

    $prefaceQuery ='
    SELECT DISTINCT p.nom,
    p.prenom,
    p.id
    FROM Personne p
    JOIN Auteur a
         ON p.id = a.idPersonne
    JOIN Role r
         ON a.idRole = r.id
    WHERE a.idRole = 4
    ';
    $prefaceQuery = $pdo->query($prefaceQuery);
    $prefaceList = $prefaceQuery->fetchAll();

    $editorQuery ='
    SELECT *
    FROM Editeur
    ';
    $editorQuery = $pdo->query($editorQuery);
    $editorList = $editorQuery->fetchAll();

    $genderQuery ='
    SELECT *
    FROM Genre
    ';
    $genderQuery = $pdo->query($genderQuery);
    $genderList = $genderQuery->fetchAll();

    $languageQuery ='
    SELECT *
    FROM Langue
    ';
    $languageQuery = $pdo->query($languageQuery);
    $languageList = $languageQuery->fetchAll();
?>

<?php include 'header.php' ?>
    <form action="addBook.php" method="POST" name="verify" onsubmit="return valider()">
        <fieldset>
            <legend>Information à propos du livre :</legend>
            <table>
                <tr>
                    <td><label for="title">Titre : </label></td>
                    <td><input type="text" name="title" size="30" maxlength="30" id="title" require></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="titleError"></td>
                </tr>
                <tr>
                    <td><label for="author">Auteur : </label></td>
                    <td><select name="author">
                        <?php foreach($authorList as $author):?>
                            <option value="<?= $author['id']?>"><?= $author['nom']?> <?= $author['prenom']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addAuthor.php">Vous ne touvez pas votre écrivrain ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="illustrator">Illustrateur : </label></td>
                    <td><select name="illustrator">
                        <option value="">Non renseigné</option>
                        <?php foreach($illustratorList as $illustrator):?>
                            <option value="<?= $illustrator['id']?>"><?= $illustrator['nom']?> <?= $illustrator['prenom']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addAuthor.php">Vous ne touvez pas votre illustrateur ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="traductor">Traducteur : </label></td>
                    <td><select name="traductor">
                        <option value="">Non renseigné</option>
                        <?php foreach($traductorList as $traductor):?>
                            <option value="<?= $traductor['id']?>"><?= $traductor['nom']?> <?= $traductor['prenom']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addAuthor.php">Vous ne touvez pas votre traducteur ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="preface">Préface : </label></td>
                    <td><select name="preface">
                        <option value="">Non renseigné</option>
                        <?php foreach($prefaceList as $preface):?>
                            <option value="<?= $preface['id']?>"><?= $preface['nom']?> <?= $preface['prenom']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addAuthor.php">Vous ne touvez pas votre préface ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="year">Année : </label></td>
                    <td><input type="number" name="year" min="1500" max="2020" step="1" value="1999" id="year"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="yearError"></td>
                </tr>
                <tr>
                    <td><label for="nbPages">Nombre de pages : </label></td>
                    <td><input type="text" name="nbPages" size="30" maxlength="4" id="nbPages"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="nbPagesError"></td>
                </tr>
                <tr> 
                    <td><label for="isbn">ISBN : </label></td>
                    <td><input type="text" name="isbn" size="30" maxlength="10" id="isbn" require></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="isbnError"></td>
                </tr>
                <tr>
                    <td><label for="editor">Éditeur : </label></td>
                    <td><select name="editor" id="">
                        <?php foreach($editorList as $editor):?>
                            <option value="<?= $editor['id']?>"><?= $editor['libelle']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addEditor.php">Vous ne touvez pas votre éditeur ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="gender">Genre : </label></td>
                    <td><select name="gender" id="">
                        <?php foreach($genderList as $gender):?>
                            <option value="<?= $gender['id']?>"><?= $gender['libelle']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addLanguage.php">Vous ne touvez pas votre langue ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td><label for="language">Langue : </label></td>
                    <td><select name="language" id="">
                        <?php foreach($languageList as $language):?>
                            <option value="<?= $language['id']?>"><?= $language['libelle']?></option>
                        <?php endforeach;?>
                    </select></td>
                    <td><a href="addLanguage.php">Vous ne touvez pas votre langue ? Cliquer ici !</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ajouter !"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="verify.js"></script>
</body>
</html>