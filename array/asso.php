<?php
$a=array("a"=>10,"b"=>"hello","c"=>30);
echo $a["b"];
foreach ($a as $ar)
{
	echo "<br>".$ar;
}
echo "<br>";
print_r($a);
var_dump($a);

?>