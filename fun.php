<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
var submitflag=true;
function nullvalidator(x,y)
{
	if(document.getElementById(x).value.length==0)
	{
	document.getElementById(y).innerHTML="<font color='red'>Not Empty</font>";
		submitflag=false;
	}
else
		document.getElementById(y).innerHTML="";
}
function pwdvalidator(x,y)
{
	if(document.getElementById(x).value.length<6)
	{
		document.getElementById(y).innerHTML="<font color='red'>enter more then 6 char </font>";
		submitflag=false;
	}

else
		document.getElementById(y).innerHTML="";

}

function confirmvalidator(y)
{
	if(document.getElementById('pwd').value!=document.getElementById('cpwd').value)
	{
		document.getElementById(y).innerHTML="<font color='red'>password not same </font>";
		submitflag=false;
	}

else
		document.getElementById(y).innerHTML="";

}
	
function numbervalidator(x,y)
{
   var reg=/^[0-9]*$/;
if(reg.test(document.getElementById(x).value)==false)
	{
		document.getElementById(y).innerHTML="<font color='red'>Only number</font>";
		submitflag=false;
	}

else
		document.getElementById(y).innerHTML="";

}

function charvalidator(x,y)
{
   var reg=/^[a-zA-Z]*$/;
	if(reg.test(document.getElementById(x).value)==false)
	{
		document.getElementById(y).innerHTML="<font color='red'>Only Char</font>";
		submitflag=false;
	}

else
		document.getElementById(y).innerHTML="";

}

function mobilevalidator(x,y)
{
   var reg=/^[0-9]{5} [0-9]{5}$/;
if(reg.test(document.getElementById(x).value)==false)
	{
		document.getElementById(y).innerHTML="<font color='red'>valid mobile format 99999 99999</font>";
		submitflag=false;
	}
                else
		document.getElementById(y).innerHTML="";

}

function emailvalidator(x,y)
{
   var reg=/^[a-zA-Z0-9]+@[a-zA-Z]+.[a-zA-Z]+$/;
	if(reg.test(document.getElementById(x).value)==false)
	{
		document.getElementById(y).innerHTML="<font color='red'>valid Email format abc@xyz.com</font>";
		submitflag=false;
	}
else
		document.getElementById(y).innerHTML="";
}
</script>
</head>


<body>
</body>
</html>
