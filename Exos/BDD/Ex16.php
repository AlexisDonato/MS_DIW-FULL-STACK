<?php
 // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
 $myVar = '
 <!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ex16 PHP</title>
 </head>
 <body>
     <a href="http://www.python.org/">Python</a><br>
     <a href="https://fr.wikipedia.org/wiki/Joel_et_Ethan_Coen">Joel_et_Ethan_Coen</a><br>
     <a href="http://fr.wikipedia.org/wiki/Sp%C4%B1n%CC%88al_Tap">Wikipedia</a><br>
     <a href="https://www.theclash.com/landing/">the clash</a><br>
     <a href="http://theforensics.net/">the forensics</a>
 </body>
 </html>
 ';

// Ouverture en écriture seule 
$fp = fopen("essai.html", "w"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp);
?>