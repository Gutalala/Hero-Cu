<?php

require("dbConnect.php");

$courseId = htmlspecialchars($_GET["course_id"]);

$db = get_db();

$query = "SELECT name, number FROM course WHERE id=$id";



?>