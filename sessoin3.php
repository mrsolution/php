<?php
session_start();
?>
<html>
<head>
<title> use of sessopn </title>

</head>
<body>
<form name="form" method="post" action="sessoin4.php">
<?php
if (isset($_SESSION["username"]))
{
		echo "welcome".$_SESSION["username"];		
}
?>
<br />
<input type="submit" name="submit" value="logout" />
<?php
	}
	
	else
	{
			header ("location:session.php");
	}
?>
</form>
</html>