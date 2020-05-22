<?php 
include "header.php";

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

unset($_SESSION);

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');

?>

<p>Vous êtes bien déconnecté.</p>
