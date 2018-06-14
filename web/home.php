<?php
/**********************************************************
* File: home.php
* Author: Br. Burton
* 
* Description: This is the home page. It checks that a user
*  exists on the session and redirects to the login page
*  if it does not.
***********************************************************/
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
require("dbConnect.php");
$db = get_db();
$query = "SELECT author, title, content, post_date FROM Posts";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html><html class=''>
<head>
<style>

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

</style>
</head>

<body>       
    <ul class="top-links">
        <li><a class="store" href="logout.php">LOG OUT</a></li>
        <li><a class="store" href="create_posts.php">CREATE NEW ARTICLE</a></li>
        </ul>

    <?php
    foreach ($posts as $Posts => $value) {
    	# code...
    	$author = $Posts["author"];
    	$title = $Posts["title"];
    	$content = $Posts["content"];
    	$post_date = $Posts["post_date"];


    	echo "<p> . $author .</p>";
    	echo "<p> . $title .</p>";
    	echo "<p> . $content .</p>";
    	echo "<p> . $post_date .</p>";
    }

        

</body></html>