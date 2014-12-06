<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php include("fun.php") ?>
<script language="javascript" type="text/javascript">
function validation()
{
	submitflag=true;
	nullvalidator('txtnum','errnumnull');
	numbervalidator('txtnum','errnum');
	nullvalidator('txtchar','errcharnull');
 	charvalidator('txtchar','errchar');
	nullvalidator('txtmob','errmobnull');
	mobilevalidator('txtmob','errmob');
	nullvalidator('txtemail','erremailnull');
	emailvalidator('txtemail','erremail');
	nullvalidator('pwd','errpwdnull');
	pwdvalidator('pwd','errpwd');
	nullvalidator('cpwd','errcpwdnull');
	confirmvalidator('errcpwd');
	return submitflag;
}

</script>
</head>

<body>
<center> <h2> Registration Form </h2></center><hr>
<form onSubmit="return validation();">
<table align="center">
<tr>
	
	<td>Number:</td>
	<td><input type="text" id="txtnum" onBlur="nullvalidator('txtnum','errnumnull');numbervalidator('txtnum','errnum');"/></td>
	<td id="errnum"></td>
	<td id="errnumnull"></td>
</tr>

<tr>
	<td>Name:</td>
	<td><input type="text" id="txtchar" onBlur="nullvalidator('txtchar','errcharnull');charvalidator('txtchar','errchar');"/></td>
	<td id="errchar"></td>
	<td id="errcharnull"></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" id="pwd" onBlur="nullvalidator('pwd','errpwdnull');pwdvalidator('pwd','errpwd');"/></td>
	<td id="errpwd"></td>
	<td id="errpwdnull"></td>

</tr>
<tr>
	<td>confirm password:</td>
	<td><input type="password" id="cpwd" onBlur="nullvalidator('cpwd','errcpwdnull');confirmvalidator('errcpwd');"/></td>
	<td id="errcpwd"></td>
	<td id="errcpwdnull"></td>

</tr>
<tr>
	<td>mobile:</td>
	<td><input type="text" id="txtmob" onBlur="nullvalidator('txtmob','errmobnull');mobilevalidator('txtmob','errmob');"/></td>
	<td id="errmob"></td>
	<td id="errmobnull"></td>
</tr>

<tr>
	<td>Email:</td>
	<td><input type="text" id="txtemail" onBlur="nullvalidator('txtemail','erremailnull');emailvalidator('txtemail','erremail');"/></td>
	<td id="erremail"></td>
	<td id="erremailnull"></td>
</tr>
<tr>
			<td>  Sex : </td>
			<td>
				<input type = "radio" name = "Sex" value = "Male" checked />Male
				<input type = "radio" name = "Sex" value = 	"Female"/>Female 
			</td>
		</tr>
<tr>
	<td>
	</td>
	<td align="right">
	<input type="submit" value="submit" id="submit" />&nbsp;
	<input type = "reset" name = "clear" value= "Reset" ></td>
</tr>
</table>
</form>
</body>
</html>
