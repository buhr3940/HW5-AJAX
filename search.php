<?php
include_once('loggedin.php');
include_once('settings.php');
?>
<!DOCTYPE html>
<html>
<head>
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
</script>

</head>

<body>
  <div class="container_12"> 
    <h2>Goal: Fetch and display some data from the dataset provided.</h2>    
    <form id="form1" name="form1" method="get" action="searchresults.php">
      <label>Name:
        <input type="text" name="nameSearch" id="nameSearch" value="lael" onkeyup="handrolled()" />
      </label>
      <label>
        <input type="submit" name="Search" id="Search" value="search" />

      </label>
        <input type="button" value="JS Search" onclick="handrolled();"/>
    </form>
  </div> 
    <div id="resultshere" ></div>
</body>
</html>
