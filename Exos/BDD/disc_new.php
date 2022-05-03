<?php
require "db.php";
$artists = fetchDisc();
$artists2 = fetchDisc2();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ajouter un vinyle</title>
</head>
<body>

    <div class="container">
            <div class="row">

                <div class="col mb-5">
                    <a href="artists.php"><button class="btn btn-primary btn-sm">Retour à la liste des artistes</button></a>
                </div>


                <div class="col-12">
                    <article>

                    <form action="http://bienvu.net/script.php" name="formulaire_contact" id="formulaire_contact" method="post" accept-charset="utf-8">

                        <fieldset>
                        <legend>Ajouter un vinyle</legend>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" value="" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="artistname">Artist</label>
                                    <select name="artistname" id="artistname" name="artistname" class="form-control">
                                        <?php foreach ($artists2 as $artist2) {
                                            echo '<option value="'.$artist2->artist_name.'">'.$artist2->artist_name.'</option>';
                                        }
                                        ?>
                                    </select>
                                    <br>
                            </div>

                            <div class="form-group">
                                <label for="year">Title</label>
                                <input type="text" id="year" name="year" class="form-control" placeholder="Enter year" value="" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter genre (Rock, Pop, Prog ...)" value="" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" id="label" name="label" class="form-control" placeholder="Enter label (EMI, Warner, Polygram, Univers sale ...)" value="" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" placeholder="" value="" required>
                                <br>
                            </div>

                            <div class="form-group">
                            <label for="picture">Picture</label>
                            <br>
                            <input type="file"
                                id="picture" name="picture"
                                accept="image/png, image/jpeg">
                                <br>
                            </div>

                            
                        </fieldset>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Envoyer</button> <button type="reset" class="btn btn-primary btn-sm">Annuler</button>
            </div>
            </fieldset>
            
                    </article>
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>