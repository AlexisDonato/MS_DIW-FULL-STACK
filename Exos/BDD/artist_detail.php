<?php
    // On se connecte à la BDD via notre fichier db.php :
    require "db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO - Détail</title>
    </head>
    <body>
    <body>
    <body>
        Artist N°<?php echo $myArtist->artist_id ?>
        Artist : <?= $myArtist->artist_name ?>
        Web Site : <?= $myArtist->artist_url ?>
        <a href="artist_form.php?id=<?= $myArtist->artist_id ?>">Modify</a>
        <a href="script_artist_delete.php?id=<?= $myArtist->artist_id ?>">Delete</a>
    </body>
    </body>
    </body>
</html>