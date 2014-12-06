<?php
			session_start();
	if (isset($_REQUEST["submit"]))
	{

			$_SESSION["uname"]=$_REQUEST["txtname"];
			header("location:sessionpg.php");
	}
	if (isset($_REQUEST["destroy"]))
	{
			session_destroy();
			
	}
?>
<html>
<head> </head>
<body>
<form id="frm1" >
<input type="text" name="txtname" />
<input type="submit" name="submit" value="submit" />
<input type="submit" name="destroy" value="destroy">
</form>
</body>
</html>