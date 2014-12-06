	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<style>
.div
{
	width:100px;
	height:100px;
	border:solid;
	overflow:auto;
	
}
</style>
<body>
	<div>
	<table class="div">
<?php
		
 		for($i=0;$i<=100;$i++)
		{
			echo "<tr>";		
			echo "<td>".$i."</td>";
			echo "</tr>";
			
		}
?>
</table>
	</div>
</body>
</html>
