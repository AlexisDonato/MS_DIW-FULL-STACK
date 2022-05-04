<?php

    // on importe le contenu du fichier "db.php"
    include "db.php";
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    $artists=FetchDisc();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PDO - List</title>
</head>
<body>
<table class="table-stripped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- Ici, on ajoute une colonne pour insérer un lien -->
            <th></th>
        </tr>

        <?php foreach ($artists as $artist): ?>
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
            <!-- Ici, on ajoute un lien par artiste pour accéder à sa fiche : -->
            <td><a href="artist_detail.php?id=<?= $artist->artist_id ?>">Detail</a></td>
        </tr>
        <?php endforeach; ?>

        <a href ="discs.php"><button class="btn btn-primary btn-sm">Discs list</button></a> 
        <a href ="disc_form.php"><button class="btn btn-primary btn-sm">Modify</button></a> 
        <a href ="disc_new.php"><button class="btn btn-primary btn-sm">Add</button></a> 
        <button type="delete" class="btn btn-primary btn-sm">Delete</button>
        <input type = "button" class="btn btn-primary btn-sm" value = "Back" onclick = "history.back()"> 

    </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>