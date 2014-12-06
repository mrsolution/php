
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery.min.js">
$(document).ready(function(){
  $("#other").click(function(){
    $("#gani").append("<input type='text'>");
  });
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<input type="checkbox" id="other" value="other" />other
<div id='gani'></div>
</body>
</html>
