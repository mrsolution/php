<html>
<head> 
<link rel="stylesheet" type="text/css" href="style2.css"/>
<link rel="stylesheet" type="text/css" href="head.css"/> 
<title> Delivery Form </title>
<style>
.td
{
text-decoration:inherit;
font-size:18px;
}
</style>
<script>
function valdate()
{
var flag=1;
var uname=document.getElementById("name").value;
if(uname.length==0)
{

uname="\nplease enter name";
flag=1;
}
else
{
uname="";
flag=0;
} 
var sname=document.getElementById("surname").value;
if(sname.length==0)
{
sname="\nplease enter suranme";
flag=1;
}
else
{ 
sname="";
flag=0;
}
var emal=document.getElementById("email").value;
if(emal.length==0)
{
emal="\nplease enter email address";
flag=1;
}
else if(emal.indexOf("@")==-1 || emal.indexOf(".")==-1)
{
alert("please enter proper email address ");
flag=0;
}

else
{
emal="";
flag=0;
}
var mnum=document.getElementById("number").value;
if(mnum.length==0)
{

mnum="\nplease enter the mobile number";
flag=1;

}
else
{

mnum="";
flag=0;
}
var pnum=document.getElementById("phone").value;
if(pnum.length==0)
{
pnum="\nplease enter the phone number";
flag=1;
}
else
{
pnum="";
flag=0;
}
var adrs=document.getElementById("address").value;
if(adrs.length==0)
{
adrs="\nplease enter your adress";
flag=1;
}
else
{
adrs="";
flag=0;
}


if (flag==1)
{
alert(uname + sname + emal + mnum + pnum + adrs );
}
}
</script>
</head>
<font face="Verdana, Arial, Helvetica, sans-serif">
<body text="blue"> 

<h1> Fill Up your Details</h1>
<br>
<hr>
Delivery Given Within 2-3 Days.
<br>
<br>

<form method="post">
<table border="0">

<tr>
<td class="td"> Name:</td>
<td> <input type="text" name="txtname" id="name"></td>
<td>
</tr>
<tr>
<td class="td"> Sur Names: </td>
<td> <input type="text" name="surname" id="surname"></td>
</tr>
<tr>
<td class="td"> E-Mail Address : </td>
<td> <input type="text" name="email" id="email"></td></tr>
<td class="td"> Mobile No : </td>
<td> <input type="text" name="number" id="number" maxlength="10"></td>
</tr>
<tr>
<td class="td"> Phone No : </td>
<td> <input type="text" name="phone" id="phone"></td>
</tr>
<tr>
<td class="td"> ADDRESS </td>
<td><textarea cols="20" rows="3" id="address"></textarea></td>

</tr>
<tr>
<td class="td"> City </td>
<td id="city"> 
<select>
<option value=""><----select-----></option>
<option value="surat">surat</option> 
<option value="Rajkot">Rajkot</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="baroda">baroda</option>
</select></td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="submit" onClick="valdate()"/>
<input type="reset" name="reset" value="reset"/>
</form>
</font>

</body>
</html>

