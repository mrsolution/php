<?php
$a=array("car"=>array("vento","innova","swift"),"bike"=>array("passion","shine"),"mobile"=>array("s","s2","s3"));

foreach ($a as $ar)
{
	echo "<br>".$ar;
}
echo "<br>";
echo "<pre>";
print_r($a);
echo "</pre>";
var_dump($a);

?>