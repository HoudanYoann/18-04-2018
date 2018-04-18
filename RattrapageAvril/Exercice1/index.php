<?php
try
{
    // Je me connecte à ma base de données
    $bdd = new PDO('mysql:host=localhost;dbname=rattrapage;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

$tableau = $bdd->query('SELECT a.title, a.content, a.date_publish, u.firstname, u.lastname
          /* Je définit "articles" en étant a */
                                 FROM articles a
          /* Je définit "users" en étant u */
                                 INNER  JOIN  users u
                                 ON a.id_user = u.ID
                                 WHERE  a.id_user = 3');

// On affiche chaque entrée une à une
while ($donnees = $tableau->fetch())
{
    ?>
    <p>
        <strong>Article</strong> : <?php echo $donnees['title']; ?><br />
        <strong>Texte</strong> : <?php echo $donnees['content']; ?><br />
        <strong>Date de publication</strong> : <?php echo $donnees['date_publish']; ?><br />
        <strong>Publié par</strong> : <?php echo $donnees['firstname'] . ' ' . $donnees['lastname'];  ?>
    </p>
    <?php
}

$tableau->closeCursor(); // Termine le traitement de la requête

?>