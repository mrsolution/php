<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
var cnt=0;
function fun(x)
{
		var x=document.getElementById(x).checked;
		if(x==true)
		{
			cnt++;
		}
		else
		{
				cnt--;
		}
		alert(cnt);
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
?>
<body>
<form method="post">
<input type="checkbox" name="language" value="php" id="check1" onclick="fun('<?php echo "check1"; ?>');"  />PHP<br />
<input type="checkbox" name="language" value="java" id="check2"  onclick="fun('<?php echo "check2"; ?>');"  />JAVA<br />
<input type="checkbox" name="language" value="html" id="check3"   onclick="fun('<?php echo "check3"; ?>');" />HTML<br />
<input type="checkbox" name="language" value="c++" id="check4" onclick="fun('<?php echo "check4"; ?>');"  />C++<br />

<input type="submit" value="send"  name="send"  onclick="fun();">

</form>
<?php 

?>
</body>
</html>
