<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

	mysql_connect("localhost","root","");
	mysql_select_db("tst");
	
?>
<form method="post">
	<input type="text" name="txt" />
	<input type="submit" name="submit" value="submit" />
	<input type="submit" name="btn" value="btn" />

<table border="1">

<?php
	if(isset($_REQUEST["submit"]))
	{
			$anss=mysql_query("select * from test");
			while($ans=mysql_fetch_array($anss))
			{
				echo "<tr>";
				?>
				<td><input type="radio" value="<?php echo $ans[0]; ?>" name="n" /></td>
				<?php
				echo "<td>".$ans[0]."</td>";
				echo "</tr>";
			}
	}
	if(isset($_REQUEST["btn"]))
	{
			$n=$_REQUEST["n"];
			echo $n;
	}
?>
</table>
</form>
</body>
</html>
