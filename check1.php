<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function fun()
{
var x=document.getElementById("language[]").value;

alert(x.length);

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
?>
<body>
<form method="post">
<input type="checkbox" name="language[]" value="php" id="language[]"  />PHP<br />
<input type="checkbox" name="language[]" value="html" id="language[]"  />HTML<br />
<input type="checkbox" name="language[]" value="java" id="language[]" />Java<br />
<input type="checkbox" name="language[]" value="c++" id="language[]"  />C++<br />
<input type="radio" name="radio" value="rad" id="rad" />hey
<input type="checkbox" name="language[]" value="php" id="q[]"  />a<br />
<input type="checkbox" name="language[]" value="html" id="q[]"  />b<br />
<input type="checkbox" name="language[]" value="java" id="q[]" />c<br />
<input type="checkbox" name="language[]" value="c++" id="q[]"  />d<br />
<input type="radio" name="radio" value="rad" id="rad" />hey
<input type="submit" value="send"  name="send" / onclick="fun();">
</form>
<?php 
$lan="";
if(!empty($_POST['language'])) {
    foreach($_POST['language'] as $check) {
			$lan=$lan.$check.",";
    }
	echo $lan;
}
?>
</body>
</html>
