
<?php

// Destinataires 
$destinataires = 'contact@afpa.com'; 

// Objet
$objet = "Confirmation d'inscription";  

// Entêtes supplémentaires 
$entêtes  = ''; 
// -> origine du message 
$entêtes .= 'From: \'Dave Loper\' <dave.loper@afpa.fr>\r\n';  
// -> message au format Multipart MIME 
$entêtes .= 'MIME-Version: 1.0\r\n'; 
$entêtes .= 'Content-Type: multipart/mixed; '; 
$entêtes .= 'boundary=\'ligne\'\r\n'; 
// (.= : concaténation avec ce qu'il se trouvent dans la variable)
// Message. 
$message  = ''; 
// -> première partie du message (texte) 
//    -> entête de la partie 
$message .= '--ligne\r\n'; 
$message .= 'Content-Type: text/plain; '; 
$message .= 'charset=iso-8859-1\r\n '; 
$message .= 'Content-Transfer-Encoding: 8bit\r\n'; 
$message .= '\r\n';   // ligne vide 

//    -> données de la partie 
$message .= 'Voir la pièce jointe.\r\n'; 
$message .= '\r\n';   // ligne vide 

// -> deuxième partie du message (pièce-jointe) 
//    -> entête de la partie 
$message .= '--ligne\r\n'; 
$message .= 'Content-Type: application/octet-stream; '; 
$message .= 'name=\'print.php\'\r\n'; 
$message .= 'Content-Transfer-Encoding: base64\r\n'; 
$message .= 'Content-Disposition: attachment; '; 
$message .= 'filename=\'print.php\'\r\n'; 
$message .= '\r\n';             // ligne vide 

// lecture du fichier en pièce jointe 
$sFileAdd = file_get_contents('print.php'); 

// encodage et découpage des données 
$sFileAdd = chunk_split(base64_encode($sFileAdd)); 

// pièce jointe de la partie (intégration dans le message) 
$message .= '$sFileAdd\r\n'; 
$message .= '\r\n';             // ligne vide 

// Délimiteur de fin du message. 
$message .= '--ligne--\r\n'; 

// Envoi. 
$bEnvoie = mail($destinataires, $objet, $message, $entêtes); 

echo 'Email bien envoy&eacute; &agrave; ' . $destinataires;

?>