<?php
  include_once('loggedin.php');
  include_once('settings.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<ol>
  <?php       
    $name = $_GET['nameSearch'];
    $query = "SELECT * FROM users where name like '%$name%' limit 20" or die("Error in the consult.." . mysqli_error($link));
	$result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result))
    {
      echo'<li>'.$row['name']."-".$row['username'];
      echo"</li>";
    }     
    mysqli_close($link);
?>
</ol>
</body>
</html>

