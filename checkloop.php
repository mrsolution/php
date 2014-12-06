<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
var cnt=0;
function clk(x)
{
		var y=document.getElementById(x).checked;

		if(y==true)
		{
			cnt++;
		}
		else
		{
				cnt--;
		}

}
function fun()
{
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
<?php
for($i=0;$i<=4;$i++)
{
	?> <input type="checkbox" name="grp[]" value="<?php echo $i; ?>" id="<?php echo $i; ?>" onclick="clk('<?php echo $i; ?>')" /><?php echo $i; 
}
?>

<input type="button" value="send"  name="send"  onclick="fun();">

</form>
</body>
</html>
