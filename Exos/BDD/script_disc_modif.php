<?php
    // Récupération des valeurs :
    // var_dump($_POST);
    // die;
    foreach ($_POST as $key => $value)
      $$key = $value;

    // Si la vérification des données est ok :
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction de la requête UPDATE sans injection SQL :
        $requete = $db->prepare("UPDATE disc SET disc_title = :title, disc_year = :year, disc_picture = :picture, disc_label = :label, disc_genre = :genre, disc_price = :price, artist_id = :artistid
                                WHERE disc_id = :id;");
        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_INT);
        $requete->bindValue(":picture", $picture, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_INT);
        $requete->bindValue(":artistid", $artistname, PDO::PARAM_INT);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);

        $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_modif.php)");
    }

    // Si OK: redirection vers la page artist_detail.php
    header("Location: disc_detail.php?id=" . $id);
    exit;
?>