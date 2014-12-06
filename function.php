<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h1> EXAMPLE OF PHP FUNCTION </h1>
<h2> String Function </h2>
<?php
	$a=10;
	
	$b=strval($a);
	echo gettype($b);
	echo "<br>";
	print_r($a);
	echo "<br>";
	echo chr(65);
		echo "<br>";
	echo ord("A");
		echo "<br>";
	$name="\tgaNi tumbi";
	echo $name;
		echo "<br>";
	echo ltrim($name);
		echo "<br>";
	echo substr($name,2);
		echo "<br>";
	echo substr($name,2,1);
	$str1="b";
	$str2="a";
		echo "<br>";
	echo strcmp($str1,$str2);
			echo "<br>";
	echo strpos($name,"i");
	echo "<br>";
echo "str str";
	echo stristr($name,"n");
		echo "<br>";
	echo "hallo";
		echo "<br>";
	print "hallo";
	echo "<h2> Math function </h2>";
		echo "<br>";
		echo abs(-1.5);
			echo "<br>";
		echo ceil(1.4);
			echo "<br>";
		echo date('d/m/y');
					echo "<br>";
		echo date('j/F/Y');
					echo "<br>";
		echo time();
					echo "<br>";
		print_r (getdate());
					echo "<br>";
		echo checkdate(8,2,2011);




?>
</body>
</html>
