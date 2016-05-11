<?php  
$count;

// if first session set a cookie otherwise redirect the user to
// the results page
if (!isset($_COOKIE["surveyTaken"])){
	$count = 1;
}
else {
	$count = $_COOKIE["surveyTaken"];
	$count++;
	header('Location: results.php');
}
setcookie("surveyTaken", $count, time() + 600);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homepage.css">	
</head>
<body class="backgroundcolor">
<h1>Welcome to the Programmers Survey</h1>
<br><br>
<form action="in.php" method="POST">
First Name: <input type="text" name="name" value="">
<br><br>
Favorite color: 
<input type="radio" name="color" value="Blue" checked>Blue
<input type="radio" name="color" value="Red">Red
<input type="radio" name="color" value="Yellow">Yellow
<input type="radio" name="color" value="Silver">Silver
<br><br>
Programming System Preference: 
<input type="radio" name="cpu" value="Mac" checked>Mac
<input type="radio" name="cpu" value="Windows">Windows
<input type="radio" name="cpu" value="Linux">Linux
<br><br>
Desktop or Laptop for coding: 
<input type="radio" name="platform" value="Laptop" checked>Laptop
<input type="radio" name="platform" value="Desktop">Desktop
<input type="radio" name="platform" value="Tablet">Tablet
<br><br>
<input type="submit">
<br><br>
<a href="results.php">Results Page</a>
</form >
</body>
</html> 