<!DOCTYPE html>
<?php
include_once ('loggedin.php');
include_once ('settings.php');
include 'navbar.php';
$query = "SELECT * FROM users ORDER by name AND * FROM relationships ORDER by friendname";
$result=mysqli_query($link,$query);
$_REQUEST['user'];
$user = $name;
?>
<head>
	<title>Users</title>
</head>
<body>
<h1> List of all users </h1><br />
<?php
while($row = mysqli_fetch_array($result)) 
?>
	<table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
		<tr bgcolor="#C8C8C8">
			    <td>Name</td>
		</tr>
				<?php while($row = mysqli_fetch_array($result)) { ?>
		    	<tr>
				    <td><?php echo $row['name']; ?></td>
				</tr> 
		  <tr>
			    <td><input type="button" value="makefriend" name="makefriend" {onclick:"makefriend"=true}> Add as Friend </input></td>
		</tr>
	
	    </table>
<?php
	if makefriend==true
		$user=$usernamerel;
		$friendname=$row['name'];
		$db = new MySQL(llhosts_ericbuhr.sql);
			if($usernamerel!="" && $friendname!="") {
				mysqli_query ($link, "INSERT INTO relationships ('usernamerel', 'friendname') VALUES ('$usernamerel', '$friendname'))" or die(mysqli_error($link));
				echo "The user has been added to your friends."
?>
	</body>
</html>

