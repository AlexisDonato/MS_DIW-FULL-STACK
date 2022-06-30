<?php
require "classes/Employe.class.php";

$date1 = new DateTime('02-05-2000');
$mag1 = new Magasin("Lidl", "12 rue de la populasse", 75000, "Pariche", "Cantine du Roy");
$emp1=new Employe("Macron", "Manu", $date1, "Empereur", 100000, "Souveraineté", $mag1, [12, 16, 18]);

$date2 = new DateTime('12-12-2012');
$mag2 = new Magasin("Resteplugranchose", "Chemin de la Gloire", 67100, "Stalingrave", "Vodkonteneur");
$emp2=new Employe("Poutine", "Casimir", $date2, "Rigolo", 685, "Abri anti-atomique", $mag2, [5, 35, 65]);

$employes=[$emp1, $emp2];

    foreach ($employes as $employe) {
        echo '<b>'.$employe->prenom.' '.$employe->getNom().'</b><br>';
        echo 'Embauché(e) depuis : '.$employe->anciennete().' années<br>';
        echo 'Au poste de : '.$employe->poste.'<br>';
        echo 'Dans le service : '.$employe->service.'<br>';
        echo 'Magasin : '.$employe->magasin->nomMag.'<br>';
        echo 'Salaire : '.$employe->salaire.'<br>';
        echo 'Prime au 30/11 de cette année : '.$employe->prime().' € <br>';
        if ($employe->magasin->restaurant != null)
            echo " - Restaurant d'entreprise<br>";
        else
            echo ' - Tickets restaurant.<br>';
        if ($employe->chequesVacances())
            echo " - Chèques vacances<br>";
        
        echo 'Chèques Noël : ';
        if (count($employe->enfants) > 0) {
            echo " OUI / Chèques Noël d'un montant de : ";
            $employe->chequesNoel()."<br>";
        } else {
            echo " - NON <br>";
        }
        echo '<br><br>';
}
?>