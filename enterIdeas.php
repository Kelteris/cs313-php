<?php

require("dbConnector.php");
$db = loadDatabase();


?>

<!DOCTYPE html>
<html>
<head>
	<title>FHE idea</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body class="backgroundcolor">
<h1>Idea creation page</h1>
<br><br>
<form action="addingIdea.php" method="POST">
Name: <input type="text" name="name" placeholder="Name" value=""></input>
<br><br>
<!-- create radio buttons for 4 seasons  -->
Season: <input type="text" name="season" value=""></input>
<br><br>
<!-- create radio buttons for this 1 -10 -->
Fitness Level: <input type="text" name="level" value=""></input>
<br><br>
Set up time (minutes): <input type="text" name="minutes" value=""></input>
<br><br>
Group Size: <input type="text" name="size" value=""></input>
<br><br>
Description: <input type="text" name="description" value=""></input>
<br><br>
<input type="submit" value="add Idea"></input>
</form>
<br><br>
<p><a href="user.php">User List</a></p>
<p><a href="fheideabank.php">Currently Available FHE Ideas</a></p>
</body>
</html>