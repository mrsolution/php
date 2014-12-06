<?php
	 mysql_connect("localhost","root","") or die("can't connect");
	 mysql_select_db("emp") or die("can't select database");
	 $qry="select * from emp";
	 $ans=mysql_query($qry);
	 echo "<table border='1'>";

	 while($anss=mysql_fetch_array($ans))
	 {
	 	 echo "<tr>";
	 	echo "<td>".$anss[0]."</td>";
	 	echo "<td>".$anss[1]."</td>";
	 	echo "<td>".$anss[2]."</td>";				
	 }
		echo "</table>";
	 
?>