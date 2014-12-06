<?php
$con=mysql_connect("localhost","root","") or die("can't connect");
$db=mysql_select_db("emp_db",$con) or die("db not found");
if (isset($_REQUEST["submit"]))
{
	$query="insert into emp values(".$_REQUEST["txtno"].",'".$_REQUEST["txtename"]."','".$_REQUEST["txtsal"]."')";
mysql_query($query);
echo "inserted";
}
	$select=mysql_query("select * from emp");
	echo "<table border='1'>";
	echo "<th> ENO </th>";
	echo "<th> ENAME </th>";
	echo "<th> SALARY </th>";


	while ($ans=mysql_fetch_array($select))
	{
		echo "<tr>";
		echo "<td>".$ans[0]."</td>";
		echo "<td>".$ans[1]."</td>";
		echo "<td>".$ans[2]."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>

<html>
<body>
<form id="frm">
<table border="1">
<tr>
<td> eno :-</td>
<td><input type="text" name="txtno"></td>
</tr>
<tr>
<td> ename :- </td>
<td> <input type="text" name="txtename"></td>
</tr>
<tr>
<td> sal :- </td>
<td> <input type="text" name="txtsal"></td>
</tr>
</table>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>