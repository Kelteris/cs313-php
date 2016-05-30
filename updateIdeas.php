<?php

require("dbConnector.php");
$db = loadDatabase();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update FHE idea</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body class="backgroundcolor">
<h1>Idea Update page</h1>
<br><br>
<form action="makeChanges.php" method="POST">
Idea Number: <input type="text" name="id" placeholder="Id number" value=""></input>
<br><br>
<input type="submit" value="Update Idea"></input>
</form>
<?php
/*$stmt = $db->prepare('SELECT firstName FROM user WHERE id=:id');
$stmt->bindValue(':id', 3, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);*/


$stmt = $db->query('SELECT * FROM idea');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo nl2br('<p> ' .
    'Idea Number: '. $row['id']. "  \n" .
    'Name: '.$row['name']." \n" .
    'season: '.$row['season']. " \n" .
    'Level of Fitness required: ' .$row['fitnessLevel']. " \n" .
    'Minutes required to set up: '.$row['setUpTimeInMins']. " \n".
    'Ideal groupsize for Activity: '.$row['groupSize']. " \n".
    'Description: ' .$row['description']. '</p>');
}
?>
<br><br>
<p><a href="fheideabank.php">Currently Available FHE Ideas</a></p>
</body>
</html>