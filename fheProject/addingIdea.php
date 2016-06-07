<?php

require("dbConnector.php");
$db = loadDatabase();

$name = htmlspecialchars($_POST['name']);
$season = htmlspecialchars($_POST['season']);
$level = htmlspecialchars($_POST['level']);
$minutes = htmlspecialchars($_POST['minutes']);
$size = htmlspecialchars($_POST['size']);
$description = htmlspecialchars($_POST['description']);


$query = "INSERT INTO idea(name, season, level, minutes, size, description) 
VALUES(:name, :season, :level, :minutes, :size, :description)";
$stmt = $db->prepare($query);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':season', $season, PDO::PARAM_STR);
$stmt->bindValue(':level', $level, PDO::PARAM_INT);
$stmt->bindValue(':minutes', $minutes, PDO::PARAM_INT);
$stmt->bindValue(':size', $size, PDO::PARAM_INT);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);
$stmt->execute();

/*		  VALUES (:name, :season, :level, :description)";
$stmt = $db->prepare($query);
/* Provoke an error -- bogus SQL syntax */
//$stmt = $dbh->prepare('bogus sql');
/*if (!$stmt) {
   echo "\nPDO::errorInfo():\n";
   print_r($db->errorInfo());
}

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':season', $season, PDO::PARAM_STR);
$stmt->bindValue(':level', $level, PDO::PARAM_INT);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);

if (!$stmt) {
   echo "\nPDO::errorInfo():\n";
   print_r($db->errorInfo());
}

$stmt->execute();
if (!$stmt) {
   echo "\nPDO::errorInfo():\n";
   print_r($db->errorInfo());
}*/

header("Location: fheideabank.php");
die("Page should have been redirected");

?>
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*echo "this is the name of the activity : $name";
echo "this is the season of the activity : $season";
echo "this is the desasd of the activity : $description";


$stmt = $db->query('SELECT * FROM idea');
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo nl2br('<p> ' . 
    'Name: '.$row['name']." \n" .
    'season: '.$row['season']. " \n" .
    'Level of Fitness required: ' .$row['fitnessLevel']. " \n" .
    'Minutes required to set up: '.$row['setUpTimeInMins']. " \n".
    'Ideal groupsize for Activity: '.$row['groupSize']. " \n".
    'Description: ' .$row['description']. '</p>');
}
?>
<p><a href="fheideabank.php">Currently Available FHE Ideas</a></p>
</body>
</html>
-->