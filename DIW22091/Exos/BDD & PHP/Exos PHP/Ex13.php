<?php
date_default_timezone_set('Europe/Paris');
$date = date('d/m/Y');
echo "Date actuelle : ".$date. "<br>";
echo "Date dans un mois : ".date('d/m/Y', strtotime('+1 month'));
?>