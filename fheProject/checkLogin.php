<?php

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


header("Location: loginPage.php");
die("Page should have been redirected");
?>