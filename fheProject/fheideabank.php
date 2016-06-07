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
	<title>FHE Idea Bank</title>
	<link rel="stylesheet" type="text/css" href="fheProject.css">
</head>
<body class="backgroundcolor">
	<h1>FHE IDEAS</h1>
	<p><a href="loginpage.php">Back to Login Page</a>
	<a href="user.php">User List</a></p>
  <p><a href="enterIdeas.php">Create a new idea</a></p>
  <p><a href="deleteIdeas.php">delete an Existing idea</a></p>
  <p><a href="updateIdeas.php">update an Existing idea</a></p>
<?php
/*$stmt = $db->prepare('SELECT firstName FROM user WHERE id=:id');
$stmt->bindValue(':id', 3, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);*/


$stmt = $db->query('SELECT * FROM idea');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo nl2br('<p> ' . 
    'Name: '.$row['name']." \n" .
    'season: '.$row['season']. " \n" .
    'Level of Fitness required: ' .$row['level']. " \n" .
    'Minutes required to set up: '.$row['minutes']. " \n".
    'Ideal groupsize for Activity: '.$row['size']. " \n".
    'Description: ' .$row['description']. '</p>');
}
/*foreach ($rows as $row)
{
	echo '<li>' . $row['firstName'] . '</li>';
}*/
?>
</body>
</html>