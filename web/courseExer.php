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
 	foreach ($courses as $course => $value) {
 		# code...
 		$id = $course["id"];
 		$name = $course["name"];
 		$number = $course["number"];

 		echo "<li><a href='courseDetails.php?course_id=$id'>$number - $name</a>CLick me</li>";
 	}
 	?>
 	<li><p>Course 1</p></li>
 	<li><p>Course 2</p></li>
 	<li><p>Course 3</p></li>
 	<li><p>Course 4</p></li>
 </ul>
</body>
</html>