<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
 
<style type="text/css"> 
#panel,#flip
{
padding:5px;
width:150px;
text-align:center;
background-color:#66CC66;
border:solid 1px #c3c3c3;
}
#panel
{
width:200px;
padding:5px;
height:50px;
display:none;
overflow:auto;
}
</style>
</head>
<body>
 
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!
<?php

 		for($i=0;$i<=100;$i++)
		{
			echo $i;
			echo "<br>";
		}
?></div>
<div id="flip">Click to slide down panel</div>
<div id="panel">Hello world!
<?php

 		for($i=0;$i<=100;$i++)
		{
			echo $i;
			echo "<br>";
		}	
?></div>

</body>
</html>
