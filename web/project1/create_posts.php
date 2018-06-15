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
?>


<!DOCTYPE html>
<html>
<head>
	<title>NEW NOTES</title>
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
	<form action="insertPosts.php" method="POST" class="postInputs">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<input type="text" name="date" placeholder="Date"><br>
		<input type="text" name="author" placeholder="Author"><br>
		<input type="text" name="title" placeholder="Title"><br>
		<textarea rows="40" cols="110" name="content" placeholder="Content"></textarea>

<br><br>
		<input type="submit" value="Publish Article">
	</form>
</body>
</html>