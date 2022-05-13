<?php
function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Poulet12');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}


function fetchDisc() {

    $db = ConnexionBase();
    // on lance une requête pour chercher toutes les fiches d'artistes et de disques
    $requete = $db->query("SELECT * FROM disc JOIN artist on disc.artist_id = artist.artist_id");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tableau;
}

function fetchDisc2() {

    $db = ConnexionBase();
    // on lance une requête pour chercher toutes les fiches d'artistes et de disques
    $requete = $db->query("SELECT * FROM artist");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tableau;
}

function fetchDisc3() {

    $db = ConnexionBase();
    // on lance une requête pour chercher toutes les fiches d'artistes et de disques
    $requete = $db->query("SELECT * FROM disc");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tableau;
}

function fetchId($id){

    $db = ConnexionBase();  
    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM disc JOIN artist on disc.artist_id = artist.artist_id WHERE disc_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myDisc = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();
    return $myDisc;
}


function displayDisc($artist){
    echo '<div class="col-2 p-0">';
    echo '  <img class="img-fluid img-thumbnail"';
    echo '  src="img/'.$artist->disc_title.'.jpeg"';
    echo '  alt="'.$artist->disc_title.'"';
    echo '  title="'.$artist->disc_title.'">';
    echo '</div>';
    echo '<div class="col-3 d-flex flex-column"> ';
    echo '  <div class="small">';
    echo '  <h5>'.$artist->disc_title.'<br></h5>';
    echo '  <b>'.$artist->artist_name.'</b><br>';
    echo '  <b>Label : </b>'.$artist->disc_label.'<br>';
    echo '  <b>Year : </b>'.$artist->disc_year.'<br>';
    echo '  <b>Genre : </b>'.$artist->disc_genre.'<br>';
    echo '</div>';
    echo '<div class="mt-auto mb-2">';
    echo '  <a href="disc_detail.php?id='.$artist->disc_id.'"><button class="btn btn-primary btn-sm">Details</button></a>';
    echo '</div>';
    echo '</div>';
}






?>