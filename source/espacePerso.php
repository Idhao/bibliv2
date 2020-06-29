<?php include "header.php";

    include "db.php";

$reservationQuery = '
    SELECT l.titre, r.dateDebut, r.dateFin, r.isbn
    FROM Reservation r
    JOIN Livre l 
        ON r.isbn = l.isbn
    WHERE r.idMembre = '.$_SESSION['id'].'
';
$reservationQuery = $pdo->query($reservationQuery);
$reservationList = $reservationQuery->fetchAll();

?>

<table>
    <caption>Liste de mes réservation :</caption>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Titre</th>
            <th>Date de début</th>
            <th>Date de fin</th>
        </tr>
    </thead>
    <?php foreach($reservationList as $reservation): ?>    
        <tbody>
            <tr>
                <td><?= $reservation['isbn']?></td>
                <td><?= $reservation['titre']?></td>
                <td><?= $reservation['dateDebut']?></td>
                <td><?= $reservation['dateFin']?></td>
                <td><input type="button" value="Retourner le livre"></td>
            </tr>
        </tbody>
    <?php endforeach;?>
</table>


