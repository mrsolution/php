<?php
	
$aray=array(10,"hello",30);
$size=sizeof($aray);
echo $size;
for($i=1;$i<=$size;$i++)
{
	foreach ($aray[$i] as $ar)
	{
		echo "<br>".$ar;
	}
}

?>