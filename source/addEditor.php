<?php
    include 'db.php';

    //insert dans la bdd
    if(isset($_POST['editor'])){
        $editor = $_POST['editor'];

        $insertEditorQuery = $pdo->prepare('
        INSERT INTO Editeur (libelle)
        VALUES ("'.$editor.'");
        ');
        $insertEditorQuery->execute(array($editor));
        var_dump($insertEditorQuery);
    }
?>

<html>
    <head>
    </head>
    <body>
        <form action="addEditor.php" method="POST">
            <fieldset>
            <legend>Information sur votre éditeur :</legend>
                <table>
                    <tr>
                        <td><label for="editor">Votre éditeur est </label></td>
                        <td><input type="text" name="editor" size="30" maxlength="30" id="editor" require></td>
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