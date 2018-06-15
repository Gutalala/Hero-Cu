<?php

$post_id = htmlspecialchars($_GET["post_id"]);

require("dbConnect.php");
$db = get_db();
$query3 = "DELETE FROM Posts WHERE id=:post_id";
$post_delete = $db->prepare($query3);
$post_delete->bindValue(":post_id", $post_id, PDO::PARAM_INT);
$post_delete->execute();
header("Location: home.php");
die();

?>