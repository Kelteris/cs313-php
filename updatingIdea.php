
<?php

require("dbConnector.php");
$db = loadDatabase();

$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$season = htmlspecialchars($_POST['season']);
$level = htmlspecialchars($_POST['level']);
$minutes = htmlspecialchars($_POST['minutes']);
$size = htmlspecialchars($_POST['size']);
$description = htmlspecialchars($_POST['description']);


$stmt = $db->prepare("UPDATE idea SET name=:name, season=:season, fitnessLevel=:level, setUpTimeInMins=:minutes, groupSize=:size, description=:description WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':season', $season, PDO::PARAM_STR);
$stmt->bindValue(':level', $level, PDO::PARAM_INT);
$stmt->bindValue(':minutes', $minutes, PDO::PARAM_INT);
$stmt->bindValue(':size', $size, PDO::PARAM_INT);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);
$stmt->execute();
//$stmt->execute(array($name, $season, $level, $minutes, $size, $description, $id));
/*$stmt = $db->prepare("DELETE FROM idea WHERE name=:name");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->execute();*/
//$affected_rows = $stmt->rowCount();


header("Location: fheideabank.php");
die("Page should have been redirected");
?>
