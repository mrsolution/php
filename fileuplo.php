<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

function img($img,$store)
		{
			echo $store;
			$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES[$img]["name"]);
$extension = end($temp);
	if ((($_FILES[$img]["type"] == "image/gif")
|| ($_FILES[$img]["type"] == "image/jpeg")
|| ($_FILES[$img]["type"] == "image/jpg")
|| ($_FILES[$img]["type"] == "image/pjpeg")
|| ($_FILES[$img]["type"] == "image/x-png")
|| ($_FILES[$img]["type"] == "image/png"))
&& ($_FILES[$img]["size"] < 1000)
&& in_array($extension, $allowedExts))
  {
	  if ($_FILES[$img]["error"] > 0)
    {
    echo "Return Code: " . $_FILES[$img]["error"] . "<br>";
    }
  else
    {
    if (file_exists($store.$_FILES[$img]["name"]))
      {
      echo $_FILES[$img]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES[$img]["tmp_name"],
      $store. $_FILES[$img]["name"]);

      }
    }
}}
?>
<body>
<form action="" method="post" enctype="multipart/form-data">
<label for="file">File Name </label>
<input type="file" name="file" id="file" multiple="multiple" />
<br />
<input type="submit" name="submit" value="submit" />
</form>
<?php
if(isset($_REQUEST['submit']))
{
		$path="upload/";
		img("file",$path);
}
?>

</body>
</html>