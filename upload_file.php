<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	if($_FILES["file"]["error"]>0)
	{
			echo "ERROR:".$_FILES["file"]["error"]."<br>";
	}
	else
	{
		echo "Upload :".$_FILES["file"]["name"]."<br>";
		echo "Type :".$_FILES["file"]["type"]."<br>";
		echo "Size :".($_FILES["file"]["size"]/1024)."KB<br>";
		echo "Stored in :".$_FILES["file"]["tmp_name"]."<br>";
move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];	}
?>
<body>
</body>
</html>