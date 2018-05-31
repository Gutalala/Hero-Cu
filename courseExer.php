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
	<title>One Two Three</title>
</head>
<body>
 <h1>COURSES</h1>
 <p>
 	<?php
 	var_dump($courses);
 	?>
</p>
</body>
</html>