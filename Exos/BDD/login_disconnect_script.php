<?php
require "login_functions.php";
session_start();
disconnect();
header('Location: login_form.php');
?>