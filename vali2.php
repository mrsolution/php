<html>
<head>
<?php
	/*if (isset($_REQUEST["submit"]))
	{
/*			if ($_REQUEST["txtuname"]=="")
			{
				echo "requre field";
			}
			else
			{
					$uname=$_REQUEST["txtuname"];
			}
			

			$mobile=$_REQUEST["mobile"];
			if(!ereg('[0-9]{10}',$mobile))
			{	
			$msgmobile = "enter mobile number";
				
			}
			else
			{
					echo "no";
			}
}*/


	$mob = $_POST['mobile'];
	$msg = "";
	$f=true;
	
	if(isset($_REQUEST["submit"]))
	{
		if((ereg('[0-9]{10}'.$mob)))
		{
			$msg = "Enter valid mobile number";
			$f = false;	
		}
	}
	?>
</head>
<body>
<form method="post" action = "vali2.php">
<table border="1">
<tr>
<td>
	User Name :- 
</td>
<td>
	<input type="text" name="txtuname"  />
    
</td>
</tr>
<tr>
<td>
	Password :- 
</td>
<td>
	<input type="password" name="pwd"  />
    
</td>
</tr>
<tr>
<td>
	E-Mail :- 
</td>
<td>
	<input type="text" name="email"  />
    
</td>
</tr>
<tr>
<td>
	Mobile No.:- 
</td>
<td>
	<input type="text" name="mobile"  />
  <?php echo $msg; ?>
</td>
</tr>

</table>
<input type="submit" name="submit" value="submit">

</form>

</body>
</html>
