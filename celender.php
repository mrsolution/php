<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	  $myCalendar = new tc_calendar("date1", true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(01, 03, 1960);
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1960, 2015);
	  $myCalendar->dateAllow('1960-01-01', '2015-03-01');
	  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
	  $myCalendar->setOnChange("myChanged('test')");
	  $myCalendar->writeScript();
	  ?>

<script language="javascript">
<!--
function myChanged(v){
	alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
}
//-->
</script></body>
</html>
