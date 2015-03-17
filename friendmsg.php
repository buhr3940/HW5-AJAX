<!DOCTYPE html>
<?php
include_once ('loggedin.php');
include_once ('settings.php');
include 'navbar.php';
$user=$_POST[user];
$query = "SELECT * FROM messages AND * FROM relationships WHERE usernamemsg=friendname AND usernamerel='$user'";
$result=mysqli_query($link,$query);
?>
<head>
	<title>Friend's messages</title>
</head>

<body>
<h1>Friend's messages </h1><br />
<?php
while($row = mysqli_fetch_array($result)) {
	if $result == NULL
	echo "Your friend has no messages."
} 		
	else 
?>
			<table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
		    <tr bgcolor="#C8C8C8">
			    <td>Message ID</td>
			    <td>User</td>
			    <td>Date-time</td>
			    <td>Message</td>
			</tr>
		    <tr>
				    <td><?php echo $row['messageid']; ?></td>
				    <td><?php echo $row['usernamemsg']; ?></td>
				    <td><?php echo $row['date']; ?></td>
				    <td><?php echo $row['message']; ?></td>
			</tr>
		   	
	    </table>
     
</body>
</html>