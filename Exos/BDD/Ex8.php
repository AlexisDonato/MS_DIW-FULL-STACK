<?php

// $date = '14/07/2019';
// echo $date. "<br>";
// $dateTime = DateTime::createFromFormat('d/m/Y', $date);
// $DateInt = $dateTime->format('Y/m/d');
// echo $DateInt. "<br>";
// $date = new DateTime('14/07/2019');
// echo $date->format('d/m/Y H:i:s');
// echo date('W',strtotime('$DateInt'));
// $date_test = "2019/07/14";
// $good_format=strtotime ($date_test);
// echo date('W',$good_format);

function nbrSemaines($date1, $date2)
{
    if ($date1 > $date2) 
    {
        return false;
    }
    else
    {
        $debut = DateTime::createFromFormat('d/m/Y', $date1);
        $fin = DateTime::createFromFormat('d/m/Y', $date2);
        return floor($debut->diff($fin)->days/7);
    }
}
echo "Le 14/07/2019 est compris dans la ".nbrSemaines('01/01/2019', '14/07/2019')."ème semaine de l'année 2019";
?>