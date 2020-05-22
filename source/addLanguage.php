<?php
    include 'db.php';

    //insert dans la bdd
    if(isset($_POST['language'])){
        $language = $_POST['language'];

        $insertLanguageQuery = $pdo->prepare('
        INSERT INTO Langue (libelle)
        VALUES ("'.$language.'");
        ');
        $insertLanguageQuery->execute(array($language));
        var_dump($insertLanguageQuery);
    }
?>

<html>
    <head>
    </head>
    <body>
        <form action="addLanguage.php" method="POST">
            <fieldset>
            <legend>Information sur votre langue :</legend>
                <table>
                    <tr>
                        <td><label for="language">Votre langue est </label></td>
                        <td><input type="text" name="language" size="30" maxlength="30" id="language" require></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Ajouter !"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>