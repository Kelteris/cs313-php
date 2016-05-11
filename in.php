<?php
$name = htmlspecialchars($_POST["name"]);
$color = htmlspecialchars($_POST["color"]);
$cpu = htmlspecialchars($_POST["cpu"]);
$platform = htmlspecialchars($_POST["platform"]);

// Put variable into and array and save them as a string to a file and
// forward the survey taker to the Results page
$surveyResult = array($name . " ",$color . " ",$cpu . " ",$platform . " ");
file_put_contents("messages.txt", $surveyResult, FILE_APPEND);
header('Location: results.php');
?>