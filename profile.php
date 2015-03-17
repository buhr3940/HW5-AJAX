<!DOCTYPE html>
<?php
include_once ('loggedin.php');
include_once ('settings.php');
include 'navbar.php';
?>
<head>
	<title>Profile</title>
</head>

<body>
<h1> Your Profile <h1> </br>
<?php
$_REQUEST($name);
$query = "SELECT * FROM users WHERE name='$name'ORDER by date" limit 1;
$result=mysqli_query($link,$query);
if ($result=mysqli_query($link,$query))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}
?>
<br>
<h2>Message Board (sorted by date) </h2> <br/>
<?php
$query = "SELECT * FROM messages WHERE usernamemsg='$name'ORDER by date";
$result=mysqli_query($link,$query);
if $result == NULL
{ 
	echo "You have no messages."
} 		else 
			while($row = mysqli_fetch_array($result)) 
{ 
?>
				<table width="90%" border="1" cellpadding="0" cellspacing="0" bordercolor="#EFEFEF">
		    <tr bgcolor="#C8C8C8">
			    <td>Message ID</td>
			    <td>User</td>
			    <td>Date-time</td>
			    <td>Message</td>
			 </tr>
	
		    <?php while($row = mysqli_fetch_array($result))?>
				<tr>
				    <td><?php echo $row['messageid'];?></td>
				    <td><?php echo $row['usernamemsg'];?></td>
				    <td><?php echo $row['date'];?></td>
				    <td><?php echo $row['message'];?></td>
				</tr>
		    	
	    </table>
     
}
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div id="main-content" class="col-2-3">
				<div class="wrap-col">
					<div class="box">
						<h2>Post a new message</h2
						<form action="" method="post" autofocus>

							<p>Date: <input type ="date-time" id="date" name="date" aria-describedby="datetime-local" required/>
							<span id="datetime-format" class="help"></span><p/>
							<p>Message: <textarea name='message' id='message' required></textarea><p/>
   
							<p><input type="submit" value="Submit"/><p/>
						</form> 
						<?php
							$messageid=$_POST['messageid'];
							$usernamemsg=$name;
							$date=$_POST['date'];
							$message=$_POST['message'];
						<?php
					</div>
				</div>
			</div>
		</div>
	</div>	

<?$
	if !(message==NULL){
		mysqli_query ($link, "INSERT INTO messsages ('usernamemsg', 'date', 'message') VALUES ('$usernamemsg', '$date', '$message')") or die(mysqli_error($link));
		echo "<p>Message has been posted successfully.";
?>
<h2> List of friends<h2>
<?php
	$query = "SELECT * FROM relationships WHERE usernamerel='$name'ORDER by friendname";
	$result=mysqli_query($link,$query);
		while($row = mysqli_fetch_array($result)) {
?>						
				<tr>
				    <td><?php echo "<a href=friendmsg.php>$row['friendname']</a>";?></td>
				</tr>
				tr>
			    <td><input type="button" value="removefriend" name="removefriend" {onclick:"removefriend"=true}> Remove as Friend </input></td>
				</tr>
<?php
	if removefriend==true {
		$friendname = $row['friendname'];
		$db = new MySQL(llhosts_ericbuhr.sql);
		mysqli_query ($link, "DELETE FROM relationships * where friendname = '$friendname'") or die(mysqli_error($link));
		echo "Your friend has been removed.";
    	echo "<br/>";
}
?>
</body>
</html>