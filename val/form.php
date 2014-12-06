<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="val.js" type="text/javascript" language="javascript" />
	</script>
	<script type="text/javascript" language="javascript">
	function val()
	{
		flag=true;
		check('txt');
		return flag;
		
	}
	
</script>

<title>Untitled Document</title>
</head>

<body>
<form method="post" onsubmit="return val();">
	Text :- 
	<input type="text" name="txt" id="txt" onblur="check('txt');" />
	<input type="submit" name="btn" id="btn" value="Submit"/>
</form>
<?php 
if(isset($_POST['btn']))
{
	echo "submit press";
}
?>
</body>
</html>
