<?php
require "login_functions.php";
$cb = ConnexionBase();
// Récupération des valeurs :
foreach ($_POST as $key => $value)
    $$key = $value;


$password_hash = password_hash($password, PASSWORD_DEFAULT);

try {
  // Construction de la requête INSERT sans injection SQL :
  $requete = $cb->prepare("INSERT INTO user (user_name, user_lastname, user_email, user_password) 
                          VALUES (:name, :lastname, :email, :password);");

  // Association des valeurs aux paramètres via bindValue() :
  $requete->bindValue(":name", $name, PDO::PARAM_STR);
  $requete->bindValue(":lastname", $lastname, PDO::PARAM_STR);
  $requete->bindValue(":email", $email, PDO::PARAM_STR);
  $requete->bindValue(":password", $password_hash, PDO::PARAM_STR);

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
  die("Fin du script (login_add_script.php)");
}

// Si OK: redirection vers la page login_form.php
header("Location: login_form.php");

// Fermeture du script
exit;

if ($email == $user->user_email) {
  echo 'Email already used<br>';
  echo '<a href = "login_new.php"><button class="btn-danger">Try another email</button></a>';
  die();
}
?>