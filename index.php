<?php
include_once('loggedin.php');
	if(!isset($_SESSION['user'])) {
		header("Location: login.php");
		}
include_once('navbar.php');
?>
<!DOCTYPE html>
<head>
	<title>Home Login</title>
</head>

<body>
<h1>Home Login<br /></h1>
<form action="login.php" method="POST"> 
    Username: <input type="text" name="username" id="username"/><br /> 
    Password: <input type="password" name="password" id="password"/><br /> 
    <input type="submit" value="Submit"/> 
</form>
</body>
</html>
