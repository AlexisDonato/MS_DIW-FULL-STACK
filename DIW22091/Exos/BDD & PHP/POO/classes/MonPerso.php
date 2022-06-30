<?php
require "Personnage.class.php";
$p = new Personnage();
$p->setNom("Lebowski");
$p->setPrenom("Jeff");
$p->setAge("50");
$p->setSexe("Homme");

echo $p->_nom.'<br>'.$p->_prenom.'<br>'.$p->_age.'<br>'.$p->_sexe;
?>