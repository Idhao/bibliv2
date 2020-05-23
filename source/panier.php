<?php include "header.php";
    include "db.php";
?>
<!--Liste des Produits -->
<?php
if (isset($_GET['isbn']) && isset($_GET['action'])) {
    echo "isbn : " . $_GET['isbn'];
    echo " | action : " .$_GET['action'];
    if ($_GET['action'] == "add") {
        $_SESSION['panier'][$_GET['isbn']]++;
    } else if ($_GET['action'] == "del") {
        if ($_SESSION['panier'][$_GET['isbn']] == 1) {
            //retire du panier
            unset($_SESSION['panier'][$_GET['isbn']]);
        } else {
            //decremente du panier
            $_SESSION['panier'][$_GET['isbn']]--;
        }
    }
}
?>

<?php
foreach ($_SESSION['panier'] as $produit => $value) {

    $productQuery = $pdo->prepare('
    SELECT titre 
    FROM Livre
    WHERE isbn=?
    ');
    $productQuery->execute(array($produit));
    $row = $productQuery->fetch();
    // var_dump($row);
    
    echo $row[0] . " | " . $value . " exemplaires";
    echo "<a href='?isbn=" . $produit . "&action=add'>[+]</a>";
    echo "<a href='?isbn=" . $produit . "&action=del'>[-]</a>";
}
?>

<?php
var_dump($_SESSION['panier']);
?>

