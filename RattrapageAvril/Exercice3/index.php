<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulaire Connexion</title>
</head>
<body>

<h1>Ajout de véhicules :</h1>

<div id="view">
    <form method="post" id="formulaire">
        Marque:<br>
        <input type="text" name="marque" placeholder="Marque de la voiture" id="marque">
        <div id="resultMarque"></div>
        <br>
        Modèle:<br>
        <input type="text" name="modele" placeholder="Modèle de la voiture" id="modele">
        <div id="resultModele"></div>
        <br>
        Année:<br>
        <input type="text" name="annee" placeholder="Année de la voiture" id="annee">
        <div id="resultAnnee"></div>
        <br>
        Couleur:<br>
        <input type="text" name="couleur" placeholder="Couleur de la voiture" id="couleur">
        <div id="resultCouleur"></div>
        <br><br>
        <input type="submit" id="submit" value="Ajouter">
    </form>
</div>

<div id="post">
    <?php include 'post.php'; ?>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>


</body>
</html>