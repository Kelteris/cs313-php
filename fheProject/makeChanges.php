<?php

require("dbConnector.php");
$db = loadDatabase();

$id = htmlspecialchars($_POST['id']);
/*$name = "";
$season = "";
$level = "";
$minutes = "";
$size = "";
$description ="";*/

$stmt = $db->query("SELECT * FROM idea WHERE id=$id");
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo nl2br('<p>' .
    'Idea Number: '. $row['id']. "  \n" .
    'Name: '. $row['name']." \n" .
    'season: '.$row['season']. " \n" .
    'Level of Fitness required: ' .$row['fitnessLevel']. " \n" .
    'Minutes required to set up: '.$row['setUpTimeInMins']. " \n".
    'Ideal groupsize for Activity: '.$row['groupSize']. " \n".
    'Description: ' .$row['description']. '</p>');
}
$stmt = $db->query("SELECT * FROM idea WHERE id=$id");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$name = $row['name'];
	$season = $row['season'];
	$level = $row['fitnessLevel'];
	$minutes = $row['setUpTimeInMins'];
	$size = $row['groupSize'];
	$description = $row['description'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FHE updata idea</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body class="backgroundcolor">
<h1>Please make any deisred changes, to the respective field</h1>
<br><br>
<form action="updatingIdea.php" method="POST">
Id: <input type="text" name="id" placeholder="number" value="<?php echo "$id" ?>"></input>
<br><br>
Name: <input type="text" name="name" placeholder="name" 
			value="<?php echo "$name" ?>"></input>
<br><br>
<!-- create radio buttons for 4 seasons  -->
Season: <input type="text" name="season" value="<?php echo "$season" ?>" 
			   placeholder="Winter, fall, spring, and summer"></input>
<br><br>
<!-- create radio buttons for this 1 -10 -->
Fitness Level: <input type="text" name="level" value="<?php echo "$level" ?>" 
				      placeholder="1-10"></input>
<br><br>
Set up time (minutes): <input type="text" name="minutes" value="<?php echo "$minutes" ?>"></input>
<br><br>
Group Size: <input type="text" name="size" value="<?php echo "$size" ?>"></input>
<br><br>
<!-- change to text area -->
Description: <input type="text" name="description" 
					value="<?php echo "$description" ?>"></input>
<br><br>
<input type="submit" value="Update current Idea"></input>
</form>
<br><br>
<p><a href="user.php">User List</a></p>
<p><a href="fheideabank.php">Currently Available FHE Ideas</a></p>
</body>
</html>