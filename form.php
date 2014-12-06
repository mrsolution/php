
<?php
		
		require("reg.php");
		
		
		
		
		$flag = true;
		$msg = "";
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mail = $_POST['email'];
		$uname = $_POST['uname'];
		$pswd = $_POST['pass'];
		$mob = $_POST['mobile'];
		
		if($_POST[init])
		{
		
		
		
		
		if(empty($fname))
		{
			$msgf = "Please, Enter Your Name";
			$flag = false;	
		}
		
		if(empty($lname))
		{
			$msgl = "Please, Enter Your Lastname";
			$flag = false;	
		}

		if(empty($pswd))
		{
			$msgp = "Enter Your Password";	
		}
	
		if(empty($uname))
		{
			$msgu = "Please, Enter Your Username";
			$flag = false;	
		}
		
		
		
		
		if(!ereg('[0-9]{10}',$mob))
		{
			$msgm = "Please, Enter Valid(10 digit) Mobile Number";
			$flag = false;	
		}
		
		/*if(!ereg("^[_a-z 0-9-] + (\.[a-z] 0-9-] +) * @ [a-z 0-9 -] + (\.[a-z 0-9-]+) * (\.[az] {2,4}) $",$mail))
		{
			$msge = "Please, Enter Valid Email Address.";
			$flag = false;
		}*/
		
		if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
			$msge = "enter valid email";
			$flag = false;	
		}
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
	.msg
	{
		color:rgba(255,0,0,1);
		font:Verdana, Geneva, sans-serif;	
	}
</style>
</head>

<body>
	
    <form name="frm" action = "form.php" method="post">
		 <table border="0">
        	<tr>
        	<td>    
    		Firstname:</td><td><input type="text" name="fname"></td><td class="msg"><?php echo $msgf; ?></td></tr>
        
        	<tr><td>Lastname:</td><td><input type="text" name="lname"></td><td class="msg"><?php echo $msgl; ?></td></tr>
        	<tr><td>Username:</td><td><input type="text" name="uname"></td><td class="msg"><?php echo $msgu; ?></td></tr>
        
        	<tr><td>Email:</td><td><input type="text" name="email"></td><td class="msg"><?php echo $msge; ?></td></tr>
        	<tr><td>password:</td><td><input type="password" name="pass"></td><td class="msg"><?php echo $msgp; ?></td></tr>
            <tr><td>password:</td><td><input type="password" name="cpass"></td><td class="msg"></td></tr>
        	<tr><td>mobile:</td><td><input type="text" name="mobile"></td><td class="msg"><?php echo $msgm; ?></td></tr>
        	<tr>
        	<td colspan="2" align="center">
       		 <input type="submit" name="submit" name="submit"><input type= "hidden" name="init" value="2"></td></tr>
       
        
    	</table>
        
        <h1>Data View In Below Table</h1><?php
		
	   		require("reg.php");
			
			echo "<table border='1' cellpadding='0px' cellspacing='0px'>";
			echo "<tr height='20px'>";
			echo "<th width='120px'> Id";
			echo "</th>";
			echo "<th width='120px'> Firstname";
			echo "</th>";
			echo "<th width='120px'> Lastname";
			echo "</th>";
			echo "<th width='120px'> Username";
			echo "</th>";
			echo "<th width='120px'> Email";
			echo "</th>";
			echo "<th width='120px'> Password";
			echo "</th>";
			echo "<th width='120px'> Mobile";
			echo "</th>";
			echo "</tr>";
			
			 
			echo "<tr>";
				echo "<td> </td>";
				
			echo "</tr>";
			echo"</table>";
		
	   ?>
        
    </form>
</body>
</html>