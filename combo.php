<html>
<head>
</head>
<body>
<form method="post">
<select name="gani">
<?php

for($i=1;$i<=30;$i++)
{
	echo "<option value='$i'>$i</option>";	
}
?>

	</select>


	<input type="radio" name="gen" value="m">male
	<input type="radio" name="gen" value="f">female
	<input type="submit" name="submit" value="submit">

	</form>
	<?php
	if (isset($_REQUEST["submit"]))
{
	echo "hallo";
	echo $_POST["gani"];
	echo $_REQUEST["gen"];
	
}
?>

</body>
</html>
