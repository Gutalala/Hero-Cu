<?php

require("dbConnect.php");

$courseId = htmlspecialchars($_GET["course_id"]);

$db = get_db();

$query = "SELECT name, number FROM course WHERE id=:id";

$statement = $db->prepare($query);
$statement->bindValue(":id", $courseId, PDO::PARAM_INT);

$statement->execute();
$row = $statement->fetch();

var_dump($row);

?>