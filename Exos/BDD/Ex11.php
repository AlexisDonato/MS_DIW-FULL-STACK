<?php
// Validateur de date tous formats
$DATE = '32/17/2019';

function validateDate($date, $format = 'Y/m/d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
if(validateDate($DATE, $format= 'd/m/Y') == TRUE )
{
    echo "La date ".$DATE." est correcte";
}
    else
{
    echo "La date ".$DATE."  est incorrecte";
}
?>