<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function chkboxval()
{
	
		var txt=document.getElementById("language[]").value;
		alert(txt);
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>
<body>
<form method="post">
<input type="checkbox" name="language[]" value="php" id="language[]"  />PHP<br />
<input type="checkbox" name="language[]" value="html" id="language[]"  />HTML<br />
<input type="checkbox" name="language[]" value="java" id="language[]" />Java<br />
<input type="checkbox" name="language[]" value="c++" id="language[]" />C++<br />
<input type="text" id="txt"  name="txt"/>
<input type="submit" value="send"  name="send" onclick="chkboxval();" />
</form>

</body>
</html>
