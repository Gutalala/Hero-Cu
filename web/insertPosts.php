<?php
$date = htmlspecialchars($_POST["date"]);
$author = htmlspecialchars($_POST["author"]);
$title = htmlspecialchars($_POST["title"]);
$content = htmlspecialchars($_POST["content"]);
$username = htmlspecialchars($_POST["username"]);
// echo "Course: $courseId\n";
// echo "date: $date\n";
// echo "content: $content\n";
require("dbConnect.php");
$db = get_db();
$query = "INSERT INTO Posts (author, title, content, post_date, username) VALUES (:author, :title, :content, :post_date, :username)";
$statement = $db->prepare($query);
$statement->bindValue(":author", $author, PDO::PARAM_STR);
$statement->bindValue(":title", $title, PDO::PARAM_STR);
$statement->bindValue(":content", $content, PDO::PARAM_STR);
$statement->bindValue(":post_date", $date, PDO::PARAM_STR);
$statement->bindValue(":username", $username, PDO::PARAM_STR);
$statement->execute();
header("Location: home.php");
die();
?>