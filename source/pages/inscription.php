<?php include "header.php"?>
<form action="addMember.php" method="POST" name="inscription" onsubmit="return passwordVerif()">
    <fieldset>
        <legend>Inscription</legend>
        <table>
            <tr>
                <td><label for="lastName">Nom :</label></td>
                <td><input type="text" name="lastName" required></td>
            </tr>
            <tr>
                <td><label for="firstName">Prénom :</label></td>
                <td><input type="text" name="firstName" required></td>
            </tr>
            <tr>
                <td><label for="username">Nom d'utilisateur :</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label for="email">Adresse mail :</label></td>
                <td><input type="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></td>
            </tr>
            <tr>
                <td><label for="telephone">Téléphone :</label></td>
                <td><input type="text" name="telephone" pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <td><label for="motDePasse">Mot de passe :</label></td>
                <td><input type="password" name="motDePasse" required></td>
            </tr>
            <tr>
                <td><label for="confirmer">Confirmer le mot de passe :</label></td>
                <td><input type="password" name="confirmer" required></td>
            </tr>
            <tr>
                    <td></td>
                    <td><input type="submit" value="S'inscrire !"></td>
                </tr>
        </table>
    </fieldset>
</form>
<script src="verify.js"></script>
<a href="connexion.php">Connectez-vous ici !</a>

</body>
</html>

