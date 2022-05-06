<?php
session_start();
if (isset($_SESSION['user'])) {
    echo 'User already connected, Is this you?';
    echo '<a href = "login_index.php"><button class="btn-danger">YES</button></a>';
    echo '<a href = "login_disconnect_script.php"><button class="btn-danger">NO</button></a>';
    die();
}


require "login_functions.php";
// Récupération des valeurs :
foreach ($_POST as $key => $value)
    $$key = $value;

$user = fetchUser($email);


if (password_verify($password, $user->user_password)) {

$_SESSION["user"] = $user->user_name. ' ' . $user->user_lastname;
$_SESSION["role"] = "user";

header('Location : login_index.php');
}
else echo 'Wrong password';
?>