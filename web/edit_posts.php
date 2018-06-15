<?php
session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: login.php");
	die(); // we always include a die after redirects.
}
$user_id = $_GET["user_id"];
$post_id = $_GET["post_id"];

require("dbConnect.php");
$db = get_db();
$query = "SELECT author, title, content, post_date FROM Posts WHERE id=:post_id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->bindValue(":post_id", $post_id, PDO::PARAM_INT);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $Posts) {
    	# code...
    	$author = $Posts["author"];
    	$title = $Posts["title"];
    	$content = $Posts["content"];
    	$post_date = $Posts["post_date"];
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>EDIT NOTES</title>
	<style type="text/css">
		a{
	text-decoration:none;
	color:white;
}
h2{
	font-family:"Voltaire";
	text-transform:uppercase;
	margin:0;
}
body{
	background-color:#304056;
	position:relative;
	overflow:hidden;
	width:100%;
}
ul.top-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #304056;
    font-family:"Voltaire";
  }
ul.top-links li {
    float: right;
  }

ul.top-links li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    padding-right: 30px;
    padding-left: 30px;
    text-decoration: none;
}

ul.top-links li a:hover {
    background-color: #111111;
}

.postInputs{
	text-align: center;
	font-family:"Voltaire";
}
	</style>
</head>
<body>
	<ul class="top-links">
        <li><a class="store" href="logout.php">LOG OUT</a></li>
    </ul>
	<form action="editPosts.php" method="POST" class="postInputs">
		<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
		<input type="text" name="date" value="<?php echo $post_date; ?>"><br>
		<input type="text" name="author" value="<?php echo $author; ?>"><br>
		<input type="text" name="title" value="<?php echo $title; ?>"><br>
		<textarea rows="40" cols="110" name="content"><?php echo $content; ?></textarea>

<br><br>
		<input type="submit" value="Publish Article">
	</form>
</body>
</html>