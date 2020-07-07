<?php include '../includes/header.php';

    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $motDePasse =password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);

    $insertMemberQuery = $pdo->prepare('
    INSERT INTO Membre (nomUtilisateur, motDePasse, email, telephone, nom, prenom)
    VALUES("'.$username.'",
    "'.$motDePasse.'",
    "'.$email.'",
    "'.$telephone.'",
    "'.$lastName.'",
    "'.$firstName.'")
    ');
    $insertMemberQuery->execute(array($username, $motDePasse, $email, $telephone, $firstName, $lastName));
    // var_dump($insertMemberQuery);
    
?>

    <p>Merci de votre inscritpion !</p>
</body>
</html>