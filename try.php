<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
	if(isset($_REQUEST["submit"]))
	{
		$mob=$_REQUEST["txt"];
		error_reporting(0); 
		if(empty($mob))
		{
			echo "null";
		}
		if(!ereg('[0-9]{10}',$mob))
		{
			echo "Please, Enter Valid(10 digit) Mobile Number";

		}
		
		else
		{
			echo "hallo";
		}
		
	}
	?>
<body>
<form method="post">
	<input type="text" name="txt" />
	<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
