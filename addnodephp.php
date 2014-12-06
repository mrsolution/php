<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div id='addnode'></div>
<form method="post">
<input type="checkbox" id="chk" value="chk" name="chk"> appendd 
<input type="submit" name="btn" id="btn">
</form>
<div id="gani"></div>
</body>
<?php
if(isset($_POST['chk']))
{
		echo "hallo";
}
if(isset($_POST['btn']))
{
		echo "btn press";
}
?>
</html>