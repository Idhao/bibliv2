<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=bibliothèque;charset=utf8','root','rootroot');
}
catch(Exception $e){
    die('Error : ' . $e.getMessage());
}
?>