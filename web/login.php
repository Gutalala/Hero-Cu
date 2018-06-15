<?php

session_start();

$badlogin = false;

if (isset($_SESSION['username']))
{
	header("Location: home.php");
	die(); // we always include a die after redirects.
}

if (isset($_POST['txtUser']) && isset($_POST['txtPassword'])) {
	# code...
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	//Connect to the DB
	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM Users WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result) {
		# code...
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB)) {
			# code...
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: home.php");
			die();  // we always include a die after redirects.
		}
		else 
		{
			$badlogin = true;
		}
	}
	else
	{
		$badlogin = true;
	}
}
// If we get to this point without having redirected, then it means they
// should just see the login form.

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<style type="text/css">
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signup {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signup-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

	</style>
</head>
<body>
  <div class="wrapper">
    <form class="form-signup" action="login.php" method="POST">       
      <h2 class="form-signup-heading">Login</h2>
      <br>
      <?php 
      if ($badlogin==true) {
      	# code...
      	echo "<p style='color:red;'> Invalid Credentials </p>";
      }
      ?>
      <input type="text" class="form-control" id="txtUser" name="txtUser" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
      <br>
      Or <a href="register.php">Sign up</a> for a new account.
    </form>
  </div>
</body>
</html>