<?php include 'includes/header.php';
 
 $query =' 
         SELECT l.titre,
         p.nom, 
         p.prenom, 
         g.libelle AS Genre,
         e.libelle AS Editeur
         FROM Livre l
         JOIN Auteur a
             ON l.isbn = a.idLivre
         JOIN Personne p
             ON a.idPersonne = p.id
         JOIN Genre g
             ON l.genre = g.id
         JOIN Editeur e
             ON l.editeur = e.id
         WHERE a.idRole = 1;
         '; //On stock d'abord la reqête dans une variable

 $query = $pdo->query($query);//$query prend pour valeur le résulat de la requete effectuer dans la bdd
 $booksList = $query->fetchAll();//on stock ce résultat dans une nouvelle variable de type tableau
 //print_r($booksList);
?>


    <section>
    
        <article><!-- Petite présentation de qui sommes nous -->
            <h2>Qui sommes nous ?</h2>
            <p>Nous sommes un petit commité de personnes qui adores la lecture. Cependant, nous avons remarqué qu'il y avait que très peu de site pouvant vous proposer
                des livres en ligne. Nous avons donc décidé de créer "<span>Wen Chang</span>", une bibliothèque en ligne qui doit son nom à Wenchangdijun qui est un
                dieu taoïste de la Littérature. Il vécut en tant que simple mortel dans la province de Szeshuan pendant la dynastie Tang.</p>
        </article>
        
        <article class="topBook"><!-- Le top 3 des livres -->
            <h3>1984</h3>
            <img src="img/livre_1984.jpg" alt="Couverture 1984">
            <h4>1949 - Roman et Science-fiction</h4>
            <h4>George Orwell</h4>
            <p>De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. Il y en a un sur le mur d'en face. Big brother vous regarde.</p>
        </article>
        <!-- <article class="topBook">
            <h3>Le Seigneur des anneaux - Intégrale</h3>
            <img src="img/livre_Seigneur_anneau.jpg" alt="Couverture Seigneur des anneaux">
            <h4>1955 - Roman</h4>
            <h4>J.R.R. Tolkien</h4>
            <p>Le Tiers Age touche à sa fin et la Terre du Milieu à son crépuscule. La Compagnie de l'Anneau va tâcher de déjouer les projets diaboliques de Sauron.</p>
        </article>
        <article class="topBook"><a href="">
            <h3>L'étranger</h3>
            <img src="img/livre_L_Etranger.jpg" alt="Couverture L'étranger">
            <h4>1942 - Roman</h4>
            <h4>Albert Camus</h4>
            <p>Sur une plage algérienne, Meursault a tué un Arabe. À cause du soleil, dira-t-il, parce qu'il faisait chaud. Comment peut-il être si indifférent ?</p>
            </a></article>
        <a href="">Voir plus</a>Redirection vers la page "Tous nos livres" -->
    </section>
</body>

</html>
