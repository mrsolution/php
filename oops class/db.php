<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once 'connect.class.php';
$obj = new Db;
$res = $obj->qry("select * from oops_test;");
while ($ress=mysqli_fetch_array($res))
{
	echo $ress[0]."-".$ress[1]."-".$ress[2];
}
?>
</body>
</html>