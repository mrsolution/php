<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if (isset($_REQUEST["login"]))
{
 	mysql_connect("localhost","root","") or die("con't connect database");
	 mysql_select_db("test") or die("can't connect table");
	 $qry=mysql_query("select * from login");
	 echo "hallo";
	 print_r($qry);
}
 	
?>
<body>
</body>
</html>