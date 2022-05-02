<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements);
// $keys = array_keys($departements); 
// for($i = 0; $i < count($departements); $i++) 
// { 
//     echo $keys[$i] . " -> "; 
//     foreach($departements[$keys[$i]] as $key => $value) 
//     { 
//         echo $value . " - "; 
//     } 
//     echo "<br>"; 
// } 

// foreach($departements as $region => $depart)
// {
//     echo $region. " -> ";
//     if(is_array($depart))
//     {
//         foreach($depart as $value)
//         {
//              echo $value." - ";
//         }
//     }
//     echo "<br>";
// }


foreach($departements as $region => $depart)
{
    $nb = count($depart);
    echo $region. " -> ";
    echo $nb. " départements";
    echo "<br>";
}
?>