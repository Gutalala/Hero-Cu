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

$query2 = "SELECT id FROM users WHERE username='$username'";
$sth = $db->query($query2);

while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
	# code...
	$user_id = $row["id"];
}

$query = "SELECT id, author, title, content, post_date FROM Posts WHERE user_id=:id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->bindValue(":id", $user_id, PDO::PARAM_INT);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html><html class=''>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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

.blogShort{ border-bottom:1px solid #ddd; color: #fff;}
.add{background: #333; padding: 10%; height: 300px;}


.btn-blog {
    color: #ffffff;
    background-color: #000066;
    border-color: #000066;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}
 h2{color:#34ca78;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 
 a.deleteButton {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    padding: 5px;
    text-decoration: none;
    color: initial;
}

.deleteCol {
    width: 300px;
    float: right;
    padding-left: 100px;   
}

a.editButton {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    padding: 5px;
    width: 50px;
    text-decoration: none;
    text-align: center;
    color: initial;
}
.editCol {
    width: 300px;
    float: right;
    padding-left: 280px;   
}
 
</style>
</head>

<body>       
    <ul class="top-links">
        <li><a class="store" href="logout.php">LOG OUT</a></li>
        <?php echo "<li><a class='store' href='create_posts.php?user_id=$user_id'>CREATE NEW ARTICLE</a></li>"; ?>
        </ul>
    <div class="container">
    <?php
    foreach ($posts as $Posts) {
    	# code...
        $post_id = $Posts["id"];
    	$author = $Posts["author"];
    	$title = $Posts["title"];
    	$content = $Posts["content"];
    	$post_date = $Posts["post_date"];
 
 		echo "<div class='blogShort'>";
        echo "<br><br>";
 		echo "<h1>" . $title ."</h1>";
        echo "<div class='deleteCol'>";
        echo "<a class='deleteButton' href='deletePosts.php?post_id=$post_id'>Remove Article</a>";
        echo "</div>";
        echo "<div class='editCol'>";
        echo "<a class='editButton' href='edit_posts.php?post_id=$post_id&amp;user_id=$user_id'>Edit</a>";
        echo "</div>";
 		echo "<article>";
    	echo "<p>" .$author ."</p>";
    	echo "<p>" .$post_date ."</p>";
    	echo "<p>" .$content ."</p>";
    	echo "</article>";
    	echo "</div>";
    }
	?>
	</div>
        

</body>
</html>