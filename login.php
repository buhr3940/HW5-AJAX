<?php
include_once ('settings.php');
if($_SESSION['user']){
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";;
}
if(isset($_POST['username'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$query ="SELECT * FROM users WHERE username='$name' and password='$password' limit 1" or die("Error in the consult.." . mysqli_error($link));  
	$result=mysqli_query($link,$query);
	while ($row = mysqli_fetch_array($result)){ 
		$_SESSION['user'] = $name;
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";;	}
}
?>
<!DOCTYPE html> 

<html>

<head>

<title>Login Page</title> 

</head>  

<body> 

<h1>Login<br></h1> 

<form action="login.php" method="POST">  

	Username: <input type="text" name="username" id="username"/><br/>  

	Password: <input type="password" name="password" id="password"/><br />  

		<input type="submit" value="Submit"/>  

</form>  

</body> 

</html> 









