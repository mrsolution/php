<?php
session_start();
if (isset($_SESSION["uname"]))
{
		echo "uname=".$_SESSION["uname"];
}
else
	echo "session not found";
?>