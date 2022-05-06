
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>New login</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="login_new_script.php" name="form_login" id="form_login" method="post" accept-charset="utf-8">
                    <fieldset>
                        <legend class="text-danger">NEW USER</legend>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Type in your name"
                                value="" required>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastame</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Type in your last name"
                                value="" required>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Type in your email adress"
                                value="" required>
                                <span id="missId"></span>
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password"
                                value="" required>
                                <span id="missPassword"></span>
                            <br>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-danger btn-sm">Send</button>
                            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


    
</body>
</html>