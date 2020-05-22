<?php
    include 'db.php';

    //insert dans la bdd
    if(isset($_POST['name'],$_POST['firstName'])){
        $name = $_POST['name'];
        $firstName = $_POST['firstName'];

        $insertPersonQuery = $pdo->prepare('
        INSERT INTO Personne (nom, prenom)
        VALUES ("'.$name.'",
        "'.$firstName.'");
        ');
        $insertPersonQuery->execute(array($name, $firstName));
        var_dump($insertPersonQuery);
    }
?>

<html>
    <head>
    </head>
    <body>
        <form action="addAuthor.php" method="POST">
            <fieldset>
            <legend>Information sur votre auteur :</legend>
                <table>
                    <tr>
                        <td><label for="name">Son nom est </label></td>
                        <td><input type="text" name="name" size="30" maxlength="30" id="name" require></td>
                    </tr>
                    <tr>
                        <td><label for="firstName">Son prénom est </label></td>
                        <td><input type="text" name="firstName" size="30" maxlength="30" id="firstName"></td>
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