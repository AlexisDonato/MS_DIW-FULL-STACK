<?php
$target = mktime(0, 0, 0, 06, 16, 2022); 
$today = time (); 
$difference =($target - $today); 
$days =(int) ($difference/86400); 
print 'Il reste '.$days. ' jours avant la fin de formation';
?>