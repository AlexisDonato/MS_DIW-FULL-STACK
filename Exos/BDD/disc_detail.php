<?php
require "db.php";
$disc = fetchId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Details</title>

</head>
<body>

    <div class="container">
        <div class="form-row">

            <div class="col mb-5">
                <a href="artists.php"><button class="btn btn-primary btn-sm">Artists list</button></a>
                <a href="discs.php"><button class="btn btn-primary btn-sm">Discs list</button></a>
            </div>

            <div class="col-12">
                    <fieldset>
                        <legend>Details</legend>
                        <div class="form-row d-flex justify-content-around">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="<?=$disc->disc_title?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="artistname">Artist</label>
                                <input type="text" id="artistname" name="artistname" class="form-control" value="<?=$disc->artist_name?>" readonly>
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-around">
                            <div class="form-group col-md-6">
                                <label for="year">Year</label>
                                <input type="text" id="year" name="year" class="form-control" value="<?=$disc->disc_year?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" value="<?=$disc->disc_genre?>" readonly>
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-around">
                            <div class="form-group col-md-6">
                                <label for="label">Label</label>
                                <input type="text" id="label" name="label" class="form-control" value="<?=$disc->disc_label?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" value="<?=$disc->disc_price?>" readonly>
                            </div>
                        </div>
                            <div class="form-group col-4">
                            <label for="picture">Picture</label>
                            <img src="img/<?=$disc->disc_title?>.jpeg" class="img-fluid img-thumbnail">
                                <br>
                            </div>
                    </fieldset>
            
                    <div class="form-group">
                        <a href ="disc_form.php?id=<?=$disc->disc_id?>"><button class="btn btn-primary btn-sm">Modify</button></a> 
                        <a href="script_disc_delete.php?id=<?=$disc->disc_id?>"><button type="delete" class="btn btn-primary btn-sm">Delete</button></a>
                        <input type = "button" class="btn btn-primary btn-sm" value = "Back" onclick = "history.back()"> 
                    </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>