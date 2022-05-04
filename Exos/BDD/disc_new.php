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

    <title>Add a disc</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class ="col-12 align-items-center mb-3">
                <a href="artists.php"><button class="btn btn-primary btn-sm">Artists list</button></a>
                <a href="discs.php"><button class="btn btn-primary btn-sm">Discs list</button></a>
            </div>

            <div class="col-12">
                <form action="script_disc_add.php" name="form_add" id="form_add" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Add a disc</legend>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" value="" pattern="[A-Za-z0-9]+" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="artistname">Artist</label>
                                    <select name="artistname" id="artistname" name="artistname" class="form-control" required>
                                        <?php foreach ($artists2 as $artist2) {
                                            echo '<option value="'.$artist2->artist_id.'">'.$artist2->artist_name.'</option>';
                                        }
                                        ?>
                                    </select>
                                    <br>
                            </div>

                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" id="year" name="year" class="form-control" placeholder="Enter year" value="" pattern="[0-9]{4}"required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" name="genre" class="form-control" placeholder="Enter genre (Rock, Pop, Prog ...)" value="" pattern="[A-Za-z]+" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" id="label" name="label" class="form-control" placeholder="Enter label (EMI, Warner, Polygram, Univers sale ...)" value="" pattern="[A-Za-z0-9]+" required>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" placeholder="" value="" pattern="^[0-9]*(\.[0-9]{1,2})?$" required>
                                <br>
                            </div>

                            <div class="form-group">
                            <label for="picture">Picture</label>
                            <br>
                            <input type="file"
                                id="picture" name="picture"
                                accept="image/png, image/jpeg" required>
                                <br>
                            </div>
                    </fieldset>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Send</button> 
                            <button type="reset" class="btn btn-primary btn-sm">Cancel</button>
                            <input type = "button" class="btn btn-primary btn-sm" value = "Back" onclick = "history.back()"> 
                        </div>
                </form>        
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>