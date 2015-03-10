<?php
include_once('loggedin.php');
include_once('settings.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Search</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
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
  function jQuerySearch() {

    $(".jQuerySearch").click(jQuerySearch()); {
        // hetting the value that user typed
        var searchString    = $("#nameSearch").val();
        // forming the queryString
        var data            = 'resultshere='+ searchString;
        
        // if searchString is not empty
        if(searchString) {
            // ajax call
			$.ajax('GET','searchresults.php?nameSearch='+ jQuerySearch,true);
            }    
        }
        return false;
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
		<input type="button" value="jQuerySearch" onclick="jQuerySearch();"/>
    </form>
  </div> 
    <div id="resultshere" ></div>
</body>
</html>
