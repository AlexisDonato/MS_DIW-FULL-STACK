<?php

require 'mvcevo/model/Model.php';

// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'mvcevo/vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'mvcevo/vue/vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'mvcevo/vue/vueErreur.php';
}
?>