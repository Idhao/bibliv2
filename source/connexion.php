<?php include 'header.php'?>
<form action="connexion.php" method="POST">
    <fieldset>
        <legend>Connexion</legend>
        <table>
            <tr>
                <td><label for="username">Nom d'utilisateur :</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label for="motDePasse">Mot de passe :</label></td>
                <td><input type="password" name="motDePasse" required></td>
            </tr>
            <tr>
                    <td></td>
                    <td><input type="submit" value="Se connecter !"></td>
                </tr>
        </table>
    </fieldset>
</form>
<a href="inscription.php">Vous n'avez pas encore de compte ? Inscrivez vous ici !</a>
</body>
</html>

<?php include 'db.php';

$username = $_POST['username'];

$logInfoQuery = '
SELECT id,
nomUtilisateur,
motDePasse,
niveauAcces
FROM Membre
WHERE nomUtilisateur = "'.$username.'"
';
$logInfoQuery = $pdo->query($logInfoQuery);
$logInfo = $logInfoQuery->fetch();
// var_dump($logInfo);

$isPasswordCorrect = password_verify($_POST['motDePasse'], $logInfo['motDePasse']);

if(!$logInfo){
    echo "Nom d'utilisateur ou mot de passe incorrect !";
}
else{
    if($isPasswordCorrect){
        $_SESSION['id'] = $logInfo['id'];
        $_SESSION['username'] = $username;
        $_SESSION['niveauAcces'] = $logInfo['niveauAcces'];
        echo "Vous êtes connecté. Bonjour ".$_SESSION['username'];
    }
    else{
        echo "Nom d'utilisateur ou mot de passe incorrect !";
    }
}