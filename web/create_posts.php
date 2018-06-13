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

?>


<!DOCTYPE html>
<html>
<head>
	<title>NEW NOTES</title>
</head>
<body>
	<form action="insertPosts.php" method="POST">
		<!--- <input type="hidden" name="username" value="<?php echo $username; ?>"> --->
		<input type="text" name="date" placeholder="Date"><br>
		<input type="text" name="author" placeholder="Author"><br>
		<input type="text" name="title" placeholder="Title"><br>
		<textarea name="content" placeholder="Content"></textarea>

<br><br>
		<input type="submit" value="Publish Article">
	</form>
</body>
</html>