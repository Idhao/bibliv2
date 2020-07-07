<?php include 'header.php';

include 'db.php';

$memberQuery ='
    SELECT nom, 
    prenom,
    email,
    telephone
    FROM Membre
    ';

$memberQuery = $pdo->query($memberQuery);
$memberList = $memberQuery->fetchAll();
?>

<table>
    <caption>Liste des membres inscrits</caption>
    <thead>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Téléphone</td>
            <td>Pénalité</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($memberList as $member):?>
            <tr>
                <td><?= $member['nom']?></td>
                <td><?= $member['prenom']?></td>
                <td><?= $member['email']?></td>
                <td><?= $member['telephone']?></td>
                <td>Aucune</td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>