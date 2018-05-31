<?php

 require("dbConnect.php");

 $db = get_db();
 if (!isset($db)) {
 	# code...
 	die("DB Connection was not set");
 }

 $query = "SELECT id, name, number FROM course";

$statement = $db->prepare($query);
$statement->execute();

$courses = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1>COURSES</h1>
 <ul>
 	<?php
 	var_dump($courses);
 	?>
 	<li><p>Shell me</p></li>
 </ul>
</body>
</html>