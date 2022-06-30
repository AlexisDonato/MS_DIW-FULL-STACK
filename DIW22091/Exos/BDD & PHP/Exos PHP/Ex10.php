<?php

$yearDate = 2020;

function leap_year($year)
{
    if($year % 400 == 0)
    { 
        return TRUE; 
    }
    elseif ($year % 100 == 0) 
    {
        return FALSE; 
    }
    elseif ($year % 4 == 0) 
    {
        return TRUE; 
    }
    else 
    {
        return FALSE; 
    }
}
if(leap_year($yearDate) == TRUE )
{
    echo "L'année ".$yearDate." est bissextile";
}
    else
{
    echo "L'année ".$yearDate."  n'est pas bissextile";
}
?>