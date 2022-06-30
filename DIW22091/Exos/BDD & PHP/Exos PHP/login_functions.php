<?php
function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=Login', 'admin', 'Poulet12');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}

function fetchUser($email) {

    $cb = ConnexionBase();
    // on lance une requête pour chercher toutes les fiches d'artistes et de disques
    $requete = $cb->prepare("SELECT * FROM user where user_email = ?;");
    $requete->execute(array($email));
    // on récupère tous les résultats trouvés dans une variable
    $tab = $requete->fetch(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tab;
}

function disconnect() {
    unset($_SESSION["user"]);
    unset($_SESSION["role"]);

    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }

    session_destroy();
}
?>