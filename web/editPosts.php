<?php
$date = htmlspecialchars($_POST["date"]);
$author = htmlspecialchars($_POST["author"]);
$title = htmlspecialchars($_POST["title"]);
$content = htmlspecialchars($_POST["content"]);
$post_id = htmlspecialchars($_POST["post_id"]);
// echo "Course: $courseId\n";
// echo "date: $date\n";
// echo "content: $content\n";
require("dbConnect.php");
$db = get_db();
$query = "UPDATE Posts SET author=:author, title=:title, content=:content, post_date=:post_date WHERE id=:post_id";
$statement = $db->prepare($query);
$statement->bindValue(":author", $author, PDO::PARAM_STR);
$statement->bindValue(":title", $title, PDO::PARAM_STR);
$statement->bindValue(":content", $content, PDO::PARAM_STR);
$statement->bindValue(":post_date", $date, PDO::PARAM_STR);
$statement->bindValue(":post_id", $post_id, PDO::PARAM_INT);
$statement->execute();
header("Location: home.php");
die();
?>