<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script>
function val()
{
	var txt=document.getElementById("txt").value
		alert(txt);
		
}
</script>
<body>
<form method="post">
<input	 type="text" name="txt" id="txt"/>
<input type="submit" name="submit" value="submit" onclick="val()" />
</form>
</body>
</html>
