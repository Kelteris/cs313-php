<?php

require("dbConnector.php");
$db = loadDatabase();

$id = htmlspecialchars($_POST['id']);

$stmt = $db->prepare("DELETE FROM idea WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
//$affected_rows = $stmt->rowCount();


header("Location: fheideabank.php");
die("Page should have been redirected");
?>

