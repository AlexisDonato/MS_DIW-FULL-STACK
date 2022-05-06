<?php

// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("img/gif", "img/jpeg", "img/pjpeg", "img/png", "img/x-png", "img/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["picture"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir 
       déplacer et renommer le fichier */
} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR
   echo "Type de fichier non autorisé";    
   exit;
}    
move_uploaded_file($_FILES["picture"]["tmp_name"], "img2/".$artist->disc_id.".jpeg");  

    // Récupération des valeurs :
    foreach ($_POST as $key => $value)
      $$key = $value;

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête INSERT sans injection SQL :
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) 
                                VALUES (:title, :year, :picture, :label, :genre, :price, :id);");
    
        // Association des valeurs aux paramètres via bindValue() :
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":picture", $picture, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_INT);
        $requete->bindValue(":id", $artistname, PDO::PARAM_INT);
    
        // Lancement de la requête :
        $requete->execute();
    
        // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
        $requete->closeCursor();
    }
    
    // Gestion des erreurs
    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_add.php)");
    }
    
    // Si OK: redirection vers la page artists.php
    header("Location: discs.php");
    
    // Fermeture du script
    exit;
?>