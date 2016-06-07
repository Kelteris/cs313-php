<?php

$name = htmlspecialchars($_POST['name']);
$password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);
$ = htmlspecialchars($_POST['season']);

header("Location: loginPage.php");
die("Page should have been redirected");
?>