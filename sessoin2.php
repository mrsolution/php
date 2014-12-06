<?php	
session_start();
$name=$_POST['username'];
$pass=$_POST['password'];
if ($name=="user" and $pass=="1234")
{
		$_SESSION["username"]=$name;
		header("location:session3.php");
		
}
else
{
		echo "wrong user name and password ";
		
}
?>