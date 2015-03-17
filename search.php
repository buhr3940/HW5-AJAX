<?php
include_once('loggedin.php');
include_once('settings.php');
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Search</title>

<script type="text/javascript">
  function handrolled(){
    var nameSearchJS = document.getElementById('nameSearch').value;
    // alert(nameSearchJS);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            //alert(xhr.responseText);
            document.getElementById("resultshere").innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET','searchresults.php?nameSearch='+ nameSearchJS,true);
    xhr.send(null);

  }

 function jqueryroller(){ 
      	$.ajax({ 
      	type: 'GET', 
 	url: 'searchresults.php', 
 	data: { nameSearch: $("#nameSearch").val()}, 
 	dataType: 'text', 
 	success: function(data){ 
 	$('#resultshere').html(data); 
 		} 
 	}); 
 }   		 

</script>
</head>

<body>
  <div class="container_12"> 
    <h2>Goal: Fetch and display some data from the dataset provided.</h2>    
    <form id="form1" name="form1" method="get" action="searchresults.php" accept-charset="ISO-8859-1">
      <label>Name:
        <input type="text" name="nameSearch" id="nameSearch" value="lael" onkeyup="handrolled()" />
      </label>
      <label>
        <input type="submit" name="Search" id="Search" value="search" />

      </label>
        <input type="button" value="JSSearch" onclick="handrolled();"/>
		<input type="button" value="jqueryroller" onclick="jqueryroller();"/>
    </form>
  </div> 
    <div id="resultshere" ></div>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
</html>
