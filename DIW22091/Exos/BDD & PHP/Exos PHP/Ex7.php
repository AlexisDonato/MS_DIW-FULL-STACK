<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// function goreddit()
// {
//     echo '<a href="https://www.reddit.com">Reddit Hug</a>';
// }
// goreddit();

// $tab = array(4, 3, 8, 2);
// $resultat = array_sum($tab);
// echo "Total : ". $resultat;


function complxPW($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}
if (complxPW("TopSecret42") != true)
{
	echo "Format non correct";	
}
else 
	echo "Format correct";
?>
</body>
</html>