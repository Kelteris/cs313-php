<?php
try
{
	//require("dbCredentials.php");
   require("dbConnector.php"); 

	$db = loadDatabase(); 
}
catch (PDOException $ex) 
{
   echo 'Error!: ' . $ex->getMessage();
   die(); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>List of Users</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body class="backgroundcolor">
	<h1>User list</h1>
	<p><a href="loginpage.php">Login Page</a></p>
	<a href="fheideabank.php">Currently Stored Ideas</a>
	<ul>
<?php
/*$stmt = $db->prepare('SELECT firstName FROM user WHERE id=:id');
$stmt->bindValue(':id', 3, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);*/


$stmt = $db->query('SELECT * FROM user');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo nl2br('<p> ' .
    	'Username: ' .$row['firstName'].' ' .$row['lastName']. " \n".
    	'Email: ' .$row['emailAddress']. '</p>');
}
/*foreach ($rows as $row)
{
	echo '<li>' . $row['firstName'] . '</li>';
}*/
?>
	</ul>
<br /><br />

</body>

</html>