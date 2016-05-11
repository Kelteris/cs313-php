<?php
$contents = file_get_contents("messages.txt");

// explode the string in an array
$display = explode(" ",$contents); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Survey Results</h1>
<?php
for ($row = 0; $row < (str_word_count($contents)/4); $row++) {
	$user = $row * 4;
  echo "<p><b>Survey Taker: $display[$user]</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$display[($row * 4) + ($col + 1)]."</li>";
  }
  echo "</ul>";
}
?>
<br>
<a href="survey.php">Survey Page</a>
</body>
</html>