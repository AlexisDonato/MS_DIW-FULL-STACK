<?php
// Que s'est-il passé le 1000200000?
$date = date_create();
date_timestamp_set($date, 1000200000);
echo date_format($date, 'U = Y-m-d H:i:s') . " => Attentats terroristes aux Etats-Unis";
?>